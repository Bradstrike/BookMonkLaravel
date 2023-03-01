<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use File;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::truncate();

        $json = file::get("database/seeders/Case_Products.json");
        $books = json_decode($json);

        foreach ($books as $key => $value) {
            Book::create([
                'product_id' => $value->product_id,
                'title' => $value->title,
                'category_id' => $value->category_id,
                'category_title' => $value->category_title,
                'author' => $value->author,
                'list_price' => $value->list_price,
                'stock_quantity' => $value->stock_quantity,
            ]);
        }
    }
}
