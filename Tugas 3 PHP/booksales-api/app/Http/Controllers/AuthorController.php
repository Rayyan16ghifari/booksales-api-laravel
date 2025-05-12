<?php

namespace App\Http\Controllers;

use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::getData(); // asumsi method getData() kamu buat sendiri
        return view('authorView', ['authors' => $authors]);
    }
}
