<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model{}

$quiz = new Quiz();
$quiz->name = 'My Quiz';
$quiz->questions = 'Question 1, Question 2';
$quiz->options = 'Option A, Option B, Option C';
$quiz->save();


$quiz = Quiz::find(1); 
$quiz->name = 'Updated Quiz Name';
$quiz->save();

// app/Models/Quiz.php

$fillable = ['title', 'description', 'photo', 'status'];

$quizzes = Quiz::all();

$quiz = Quiz::find(1); 
if ($quiz) {
    $quiz->delete();
} else {
}

