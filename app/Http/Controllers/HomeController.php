<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $surveys = Survey::where('user_id', auth()->id())->paginate(7);
        return view('home', ['surveys' => $surveys]);
    }

    public function search(Request $request)
    {
        return Survey::where('user_id', auth()->id())->where('name', 'like', '%' . $request['query'] . '%')->take(5)->get();
    }
}
