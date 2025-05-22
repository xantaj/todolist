@extends('layouts.app')

@section('content')
<style>
    .container {
        max-width: 500px;
        margin: 50px auto;
        padding: 30px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        font-family: Arial, sans-serif;
    }

    .container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    label {
        display: block;
        margin-bottom: 6px;
        font-weight: bold;
        color: #555;
    }

    input[type="text"],
    input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 14px;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #3490dc;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px;
    }

    button:hover {
        background-color: #2779bd;
    }

    .delete-button {
        background-color: #e3342f;
        margin-top: 20px;
    }

    .delete-button:hover {
        background-color: #cc1f1a;
    }

    .alert-success {
        background-color: #d4edda;
        border: 1px solid #c3e6cb;
        color: #155724;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
    }
</style>

<div class="container">
    <h2>Profilini Düzenle</h2>

    @if (session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PATCH')

        <label for="name">İsim</label>
        <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required>

        <button type="submit">Güncelle</button>
    </form>

    <form method="POST" action="{{ route('profile.destroy') }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="delete-button" onclick="return confirm('Hesabını silmek istediğine emin misin?')">Hesabı Sil</button>
    </form>
</div>

@endsection
