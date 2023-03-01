<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        "category_id",
        "category_title",
        "product_id",
        "title",
        "author",
        "list_price",
        "stock_quantity",
    ];

    public function book_category()
    {
        return $this->belongsTo(BookCategory::class);
    }
}
