@foreach ($quizzes as $quiz)
    <div>
        <h2>{{ $quiz->title }}</h2>
        <p>{{ $quiz->description }}</p>
        <img src="{{ $quiz->photo }}" alt="Quiz Photo">
    </div>
@endforeach