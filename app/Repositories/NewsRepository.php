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
        return News::findOrFail(5);
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
        $news->user_id = $data['user_id'];
        $news->image_url = $data['image_url'];
        $news->text = $data['news_text'];
        $news->views = $data['views'];
        $news->comments_count = $data['comments_count'];

        return $news->save(); // insert into news (`title`, `author_name`, `image_url`, `text`, `views`, `comments_count`, `updated_at`, `created_at`) values (first News after reltions, Dulat Baizhanov, 123456789765432, Бәріне сәлем, Қазақстанды Головкин тағы да таңқалдырды ура ура ура!!!, 0, 0, 2025-01-28 14:56:11, 2025-01-28 14:56:11))
    }

    public function delete(int $id)
    {
        return News::destroy($id);
    }
}
