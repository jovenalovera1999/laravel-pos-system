<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'product_code',
        'product_name_id',
        'quantity',
        'price',
        'category_id',
        'supplier_id',
        'is_available',
        'is_expired',
        'is_deleted',
    ];
}
