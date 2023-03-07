<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $surveys = Survey::where('user_id', auth()->user()->id)->simplePaginate(3);
        return view('home', ['surveys' => $surveys]);
    }
}
