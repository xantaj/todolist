<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Auth::user()->todos;
        return view('todos.index', compact('todos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Auth::user()->todos()->create([
            'title' => $request->title,
            'is_done' => false,
            'description' => $request->description,
        ]);

        return redirect()->route('todos.index');    
    }

    public function destroy(Todo $todo)
    {
        if ($todo->user_id === Auth::id()) {
            $todo->delete();
        }
        return redirect()->route('todos.index');    
    }

    public function toggle(Todo $todo)
    {
        if ($todo->user_id === Auth::id()) {
            $todo->is_done = !$todo->is_done;
            $todo->save();
        }
        return back();
    }
}
