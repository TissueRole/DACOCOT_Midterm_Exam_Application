<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $movies = [
            ['title' => 'The Grand Budapest Hotel', 'director' => 'Wes Anderson', 'year' => 2014],
            ['title' => 'There Will Be Blood', 'director' => 'Paul Thomas Anderson', 'year' => 2007],
            ['title' => 'Memento', 'director' => 'Christopher Nolan', 'year' => 2000],
            ['title' => 'Rear Window', 'director' => 'Alfred Hitchcock', 'year' => 1954],
            ['title' => 'The Godfather', 'director' => 'Francis Ford Coppola', 'year' => 1972],
        ];

        return view('products.index', compact('movies'));
    }
}
