<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Option;
use App\Models\Result;
class TestController extends Controller
{
    public function index()
    {
       
        $questions = Question::inRandomOrder()
        ->with(['questionOptions' => function ($query) {
            $query->inRandomOrder();
        }])->get();
        return view('test', compact('questions'));
    }
   
    public function create(Request $request)
    {
        $request->validate([
       
            "questions"    => "required|array|min:10",

        ],
        [
            'questions.required' => 'Complete all questions',
        ]
    ); 
        
     
        $options = Option::find(array_values($request->input('questions')));
        $result = auth()->user()->userResults()->create([
            'total_points' => $options->sum('points')
        ]);

        $questions = $options->mapWithKeys(function ($option) {
            return [$option->question_id => [
                        'option_id' => $option->id,
                        'points' => $option->points
                    ]
                ];
            })->toArray();

        $result->questions()->sync($questions);
        return redirect()->route('results.show', $result->id);
    }

    public function show($result_id)
    {
        $result = Result::whereHas('user', function ($query) {
                $query->whereId(auth()->id());
            })->findOrFail($result_id);
        $questions = Question::get();
     
        
        return view('result', compact('result','questions'));
    }
}
