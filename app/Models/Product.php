<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'description',
        'price',
        'stock',
        'image',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function calculateDiscount($percentage)
    {
        return $this->price * ($percentage / 100);
    }

    public function isOutOfStock()
    {
        return $this->stock <= 0;
    }
}
 