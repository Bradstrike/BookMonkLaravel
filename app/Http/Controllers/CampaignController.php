<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignController extends Controller
{
    //Sabahattin Ali'nin Roman kitaplarında 2 üründen 1 tanesi bedava.
    public function campaign1()
    {
        $books = Book::whereAuthor('Sabahattin Ali')->get();
        $count = $books->count();
        $free = 0;
        $total = 0;
        foreach($books as $book) {
            if($count > 2) {
                if($free < 1) {
                    $total += 0;
                    $free++;
                }else {
                    $total += $book->list_price;
                }
            }else {
                $total += $book->list_price;
            }
        }
        return $total;
    }
}
