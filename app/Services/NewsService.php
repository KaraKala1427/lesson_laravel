<?php


namespace Services;

use App\Models\News;
use Illuminate\Http\Request;

class NewsService
{

    public function getAll()
    {
        return News::all();
    }
    public function getById($id)
    {
        return News::find($id);
    }

    public function update(int $id, Request $request): News
    {
        $news = News::find($id);

        $news->title = $request->title;
        $news->author_name = $request->author;
        $news->image_url = $request->image_url;
        $news->text = $request->news_text;
        $news->views = $request->views;
        $news->comments_count = $request->comments_count;

        $news->save();

        return $news;
    }

    public function create(array $data)
    {
        $news = new News();
        $news->title = $data['title'];
        $news->author_name = $data['author'];
        $news->image_url = $data['image_url'];
        $news->text = $data['news_text'];
        $news->views = 0;
        $news->comments_count = 0;

        $news->save(); // insert into news
    }

    public function delete(int $id)
    {
        return News::destroy($id);
    }
}
