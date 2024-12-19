<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCreateRequest;
use Illuminate\Http\Request;
use Services\NewsService;


class NewsController extends Controller
{
    public function __construct(private NewsService $newsService)
    {
    }


    public function index()
    {
        $news = $this->newsService->getAll();

        return view('homepage', compact('news'));
    }

    public function create(NewsCreateRequest $request)
    {
        $data = $request->validated();

        $this->newsService->create($data);

        return redirect(route('homepage'))->with('success', 'Жаңалық сәтті порталға шықты!');
    }

    public function detail(int $id)
    {
        $news = $this->newsService->getById($id);

        return view('detailed-news', compact(['news']));
    }

    public function getUpdatePage(int $id)
    {
        $news = $this->newsService->getById($id);

        return view('update-news', compact(['news']));
    }

    public function update(int $id, Request $request)
    {
        $news = $this->newsService->update($id, $request);

        return redirect(route('one-news', $news->id));
    }

    public function delete(int $id)
    {
        $deleted = $this->newsService->delete($id);

        if($deleted) {
            return redirect(route('homepage'));
        }

        return response()->json(['error' => 'Қате'], 500);
    }
}
