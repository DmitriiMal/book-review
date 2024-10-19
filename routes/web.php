<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $books = \App\Models\Book::limit(5)->withAvg('reviews', 'rating')->orderBy('reviews_avg_rating')->get();

    dd($books);
    // return view('welcome');
});
