<?php

namespace App\Http\Controllers;

use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::getData(); // Pastikan metode ini ada di model Genre
        return view('genreView', ['genres' => $genres]);
    }
}
