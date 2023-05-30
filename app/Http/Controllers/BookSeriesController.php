<?php

namespace App\Http\Controllers;

use App\Models\BookSeries;
use Illuminate\Http\Request;

class BookSeriesController extends Controller
{
    public function index(){
        $books = BookSeries::all();

        return view('home', compact("books"));
    }

    public function show(){
        $books = BookSeries::find();

        return view('detail', compact("books"));
        // return view('detail', compact('books'));
    }
}
