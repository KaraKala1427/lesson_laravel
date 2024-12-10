<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonPageController extends Controller
{

    public function detailPage(string $cityName)
    {
        $users = User::where('city', 'aktau')->get(); // eloquent

        dd($users);

        return view('profile.detail-page',
            compact(['result'])
        );
    }

    public function welcomePage()
    {
        return 'Welcome page';
    }
}
