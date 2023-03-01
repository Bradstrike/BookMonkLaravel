<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Basket;

class BasketController extends Controller
{

    public $basket;
    public $book;
    
    //Alışveriş sepeti sayfası için fonksiyon
    public function index()
    {

        $this->basket = Basket::whereUserId(auth()->user()->id)->get();
        return view('basket', ['basket' => $this->basket]);
    }

    //Sepete ekleme fonksiyonu
    public function add(Request $request)
    {
        $book = Book::find($request->id);
        $this->basket = Basket::whereUserId(auth()->user()->id)->whereBookId($book->id);

        if($this->basket->count() > 0) {
            $this->basket->first()->update([
                "quantity" => $this->basket->first()->quantity+1,
                "total_price" => $this->basket->first()->total_price + $book->list_price
            ]);
        }else {
            Basket::create([
                "user_id" => auth()->user()->id,
                "book_id" => $book->id,
                "quantity" => 1,
                "total_price" => $book->list_price,
            ]);
        }

        return redirect()->back()->with('success', 'Kitap sepete eklendi.');


    }

    //Sepetten silme fonksiyonu
    public function remove(Request $request)
    {
        if($request->id) {
            $this->basket = Basket::whereUserId(auth()->user()->id)->whereBookId($request->id)->first();
            if($this->basket->quantity > 1) {
                $this->basket->update([
                    "quantity" => $this->basket->quantity-1,
                    "total_price" => $this->basket->total_price - $this->basket->book->list_price
                ]);
            }else {
                Basket::whereUserId(auth()->user()->id)->whereBookId($request->id)->delete();
            }
            
            return redirect()->back()->withSuccess('Ürün sepetten silindi.');
        }
    }

    //Sepetin içeriğini gösterme fonksiyonu

    public function show()
    {
        $this->basket = session()->get('basket');
        return view('basket', ['basket' => $this->basket]);
    }

    //Sepetin içeriğini boşaltma fonksiyonu

    public function clear()
    {
        session()->forget('basket');
        return redirect()->back()->with('success', 'Sepetiniz boşaltıldı.');
    }

    //Sepetin içeriğini güncelleme fonksiyonu

    public function update(Request $request)
    {
        if($request->id and $request->quantity) {
            $basket = session()->get('basket');
            $basket[$request->id]["quantity"] = $request->quantity;
            session()->put('basket', $basket);
            session()->flash('success', 'Sepetiniz güncellendi.');
        }
    }

    
}
