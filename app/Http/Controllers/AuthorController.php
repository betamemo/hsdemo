<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = User::whereNotNull('email_verified_at')->orderBy('name')->get();

        return view('authors.index', ['authors' => $authors]);
    }

    public function show(string $id)
    {
        $author = User::find($id);

        return view('authors.show', ['author' => $author]);
    }
}
