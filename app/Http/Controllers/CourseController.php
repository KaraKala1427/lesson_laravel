<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(string $title): JsonResponse
    {
        $course = Course::query()->with('users')->where('title', '=', $title)->get();

        return response()->json([
            'success' => true,
            'data' => $course,
        ]);
    }
}
