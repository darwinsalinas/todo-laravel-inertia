<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TodoController extends Controller
{
    public function component()
    {
        return Inertia::render('Todo', [
            'todos' => Task::with(['user'])->get()
        ]);
    }
}
