<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonPageController extends Controller
{

    public function detailPage(string $cityName)
    {
        $result = DB::table('Persons')
            ->where('city', '=', $cityName)
            ->get(); // Collection

        return view('profile.detail-page',
            compact(['result'])
        );
    }

    public function welcomePage()
    {
        return 'Welcome page';
    }
}
