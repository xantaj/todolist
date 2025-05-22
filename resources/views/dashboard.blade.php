@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1 style="font-size: 2rem;">Hoşgeldiniz, {{ Auth::user()->name }}!</h1>
<br>
    <!-- Todo List sayfasına yönlendirecek şık buton -->
    <a href="{{ route('todos.index') }}">
        <button class="button-todolist">
            To-Do List'e Git
        </button>
    </a>

</div>
@endsection