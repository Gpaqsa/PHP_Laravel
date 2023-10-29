@extends('layouts.app')

@section('content')
    <h2>Quiz Form</h2>
    <form method="POST" action="{{ route('quiz.submit') }}">
        @csrf
        <input type="hidden" name="quizId" value="{{ $quiz->id ?? '' }}">

        <label for="quizName">Quiz Name:</label>
        <input type="text" id="quizName" name="quizName" value="{{ $quiz->name ?? '' }}" required>
        <br><br>

        <label for="questions">Questions:</label>
        <textarea id="questions" name="questions" required>{{ $quiz->questions ?? '' }}</textarea>
        <br><br>

        <label for="options">Options:</label>
        <textarea id="options" name="options" required>{{ $quiz->options ?? '' }}</textarea>
        <br><br>

        <button type="submit">Submit</button>
    </form>
@endsection