<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BookCategory;
use Illuminate\Support\Facades\DB;


class BookController extends Controller
{

    
    public $books;
    
    public function index()
    {
        $this->books = Book::all();
        return view('welcome', ['books' => $this->books]);
        
    }


    public function product($id)
    {
        $this->books = Book::find($id);
        return view('product', ['books' => $this->books]);
    }
    

}
