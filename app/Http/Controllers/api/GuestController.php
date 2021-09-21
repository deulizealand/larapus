<?php

namespace App\Http\Controllers\api;

use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return response()->json($books, 200);
    }
}
