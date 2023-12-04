<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model{

    protected $fillable = ['title', 'description', 'photo', 'status'];

    public function createQuiz()
    {
        $quiz = new Quiz();
        $quiz->title = 'My Quiz';
        $quiz->description = 'Question 1, Question 2';
        $quiz->options = 'Option A, Option B, Option C';
        $quiz->save();

        return $quiz;
    }

    public function updateQuiz($quizId)
    {
        $quiz = Quiz::find($quizId);
        if ($quiz) {
            $quiz->title = 'Updated Quiz Name';
            $quiz->save();
        }

        return $quiz;
    }

    public function getAllQuizzes()
    {
        $quizzes = Quiz::all();
        return $quizzes;
    }

    public function deleteQuiz($quizId)
    {
        $quiz = Quiz::find($quizId);
        if ($quiz) {
            $quiz->delete();
        }
    }

}