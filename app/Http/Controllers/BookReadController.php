<?php

namespace App\Http\Controllers;

use App\Models\BookRead;
use Illuminate\Http\Request;

class BookReadController extends Controller
{
    public function show(){
        $books = BookRead::class;

        return view('home', compact("books"));
    }
}
