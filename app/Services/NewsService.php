<?php


namespace App\Services;

use App\Models\News;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;

class NewsService
{

    public function __construct(private NewsRepository $newsRepository) // Dependency Injection
    {}

    public function getAll()
    {
        return $this->newsRepository->all();
    }

    public function getById($id)
    {
        return $this->newsRepository->findById($id);
    }

    public function update(int $id, array $data): News
    {
        $news = $this->getById($id);

        $this->newsRepository->update($news, $data);

        return $news;
    }

    public function create(array $data): bool
    {
        $data['user_id'] = auth()->user()->id; // 19
        $data['views'] = 0;
        $data['comments_count'] = 0;

        return $this->newsRepository->create($data);
    }

    public function delete(int $id)
    {
       return $this->newsRepository->delete($id);
    }
}
