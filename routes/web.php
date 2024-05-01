<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\WelcomeController::class);

Route::resource('authors', \App\Http\Controllers\AuthorController::class)->only('index', 'show');

Route::resource('articles', \App\Http\Controllers\ArticleController::class);
