<?php

namespace App\Repositories;

use App\Models\News;
use Illuminate\Http\Request;

class NewsRepository
{
    public function all()
    {
        return News::all();
    }

    public function findById(int $id)
    {
        return News::findOrFail($id);
    }

    public function update(News $news, array $data)
    {
        $news->title = $data['title'];
        $news->author_name = $data['author'];
        $news->image_url = $data['image_url'];
        $news->text = $data['news_text'];
        $news->views = $data['views'];
        $news->comments_count = $data['comments_count'];

        $news->save();
    }

    public function create(array $data): bool
    {
        $news = new News();
        $news->title = $data['title'];
        $news->author_name = $data['author'];
        $news->image_url = $data['image_url'];
        $news->text = $data['news_text'];
        $news->views = $data['views'];
        $news->comments_count = $data['comments_count'];

        return $news->save();
    }

    public function delete(int $id)
    {
        return News::destroy($id);
    }
}
