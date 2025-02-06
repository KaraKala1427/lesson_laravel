<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCreateRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\Services\NewsService;


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

    public function indexApi()
    {
        $news = $this->newsService->getAll();

        return response()->json([
            'success' => true,
            'data' => $news,
        ]);
    }

    public function myNews()
    {
        return response()->json([
            'success' => true,
            'data' => auth()->user()->news,
        ]);
    }

    public function myCourses()
    {
        return response()->json([
            'success' => true,
            'data' => auth()->user()->courses,
        ]);
    }

    public function create(NewsCreateRequest $request)
    {
        $data = $request->validated();

        $this->newsService->create($data);

        return redirect(route('homepage'))->with('success', 'Жаңалық сәтті порталға шықты!');
    }

    public function createApi(NewsCreateRequest $request)
    {
        $data = $request->validated();

        $this->newsService->create($data);

        return response()->json([
            'success' => true,
            'data' => [
                'message' => 'Жаңалық сәтті порталға шықты!',
            ]
        ], 201);
    }

    public function detail(int $id)
    {
        $news = $this->newsService->getById($id);

        return view('detailed-news', compact(['news']));
    }

    public function detailApi(int $id)
    {
        $news = $this->newsService->getById($id);

        return response()->json([
            'success' => true,
            'data' => $news,
        ]);
    }

    public function getUpdatePage(int $id)
    {
        $news = $this->newsService->getById($id);

        return view('update-news', compact(['news']));
    }

    public function update(int $id, NewsUpdateRequest $request)
    {
        $news = $this->newsService->update($id, $request->validated());

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

    public function isNewsTop(int $views)
    {
        if ($views > 100000) {
            return true;
        }

        $a = 45;

        $age = $this->calculateAge($a);

        return false;
    }

    public function calculateAge(int $a)
    {
        return 34;
    }
}
