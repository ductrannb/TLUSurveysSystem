<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $surveys = Survey::where('user_id', auth()->user()->id)->paginate(7);
        return view('home', ['surveys' => $surveys]);
    }

    public function search(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');

            $surveys = Survey::where('user_id', auth()->user()->id)->where('name','like','%'.$query.'%')->paginate(7);
            $output = '<ul';
            foreach($surveys as $row)
            {
               $output .= '
               <li><a href="survey/view?id='. $row->id .'">'.$row->name.'</a></li>
               ';
            }
            $output .= '</ul>';
            echo $output;
       }
    }
}
