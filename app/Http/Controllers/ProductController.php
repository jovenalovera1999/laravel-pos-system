<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::leftJoin('product_names', 'products.product_name_id', '=', 'product_names.product_name_id')
            ->leftJoin('categories', 'products.category_id', '=', 'categories.category_id')
            ->leftJoin('suppliers', 'products.supplier_id', '=', 'suppliers.supplier_id')
            ->orderBy('categories.category', 'asc')
            ->orderBy('product_names.product_name', 'asc')
            ->paginate(25);

        return view('product.index', compact('products'));
    }
}
