<?php

namespace Tests\Unit;

use App\Http\Controllers\NewsController;
use App\Repositories\NewsRepository;
use App\Services\NewsService;
use App\Services\UserService;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function calculate_age(): void
    {
        $service = new UserService();

        $age = $service->calculateAge('2000-01-25');

        $this->assertEquals(25, $age);
    }

    /** @test */
    public function isTop(): void
    {
        $controller = new NewsController((new NewsService((new NewsRepository()))));

        $isTop = $controller->isNewsTop(1);

        $this->assertEquals($isTop, false);

        $isTop = $controller->isNewsTop(200000);

        $this->assertEquals($isTop, true);
    }
}
