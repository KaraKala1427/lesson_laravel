<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();

        return view('homepage', compact('news'));
    }

    public function create(Request $request)
    {
        $title = $request->title;
        $author = $request->author;
        $image_url = $request->image_url;
        $text = $request->news_text;

        $news = new News();
        $news->title = $title;
        $news->author_name = $author;
        $news->image_url = $image_url;
        $news->text = $text;
        $news->views = 0;
        $news->comments_count = 0;

        $news->save();

        return redirect(route('homepage'));
    }

    public function detail(int $id)
    {
        $news = News::find($id);

        return view('detailed-news', compact(['news']));
    }

    public function getUpdatePage(int $id)
    {
        $news = News::find($id);

        return view('update-news', compact(['news']));
    }

    public function update(int $id, Request $request)
    {
        $news = News::find($id);

        $news->title = $request->title;
        $news->author_name = $request->author;
        $news->image_url = $request->image_url;
        $news->text = $request->news_text;
        $news->views = $request->views;
        $news->comments_count = $request->comments_count;

        $news->save();

        return redirect(route('one-news', $news->id));
    }
}
