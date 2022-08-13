<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Option;
use App\Models\Result;
use App\Models\User;
class ResultsController extends Controller
{
    public function index()
    {
       

        $result = User::select('users.mobile','users.name','results.total_points','results.created_at')
        ->join('results','users.id','=','results.user_id')
        ->paginate(10);
        return view('show_all',compact('result'));
    }
}
