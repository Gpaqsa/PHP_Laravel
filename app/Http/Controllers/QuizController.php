<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
class QuizController extends Controller
{
    //
    public function ShowQuizForm($id = null)
    {
        $quiz = ($id) ? Quiz::find($id): new Quiz();

        return view('quiz.form', compact('quiz'));
    }

    public function submitQuizForm(Request $request)
    {
        if ($request->input('quizID')) {
            $quiz = Quiz::find($request->input('quizID'));

        }else {
            $quiz = new Quiz();
        }

        $quiz->name = $request->input('quizName');
        $quiz->questions = $request->input('questions');
        $quiz->options = $request->input('options');
        $quiz->save();

        return redirect('/quiz-list');
    }
}
