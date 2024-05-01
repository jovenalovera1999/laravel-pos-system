<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function index() {
        $productCode = mt_rand(10000000000, 99999999999);

        $categories = Category::orderBy('categories.category', 'asc')
            ->get();

        $products = Product::leftJoin('product_names', 'products.product_name_id', '=', 'product_names.product_name_id')
            ->leftJoin('categories', 'products.category_id', '=', 'categories.category_id')
            ->leftJoin('suppliers', 'products.supplier_id', '=', 'suppliers.supplier_id')
            ->where('products.is_available', true)
            ->where('products.is_expired', false)
            ->where('products.is_deleted', false)
            ->orderBy('categories.category', 'asc')
            ->orderBy('product_names.product_name', 'asc');

        if(request()->has('search')) {
            $searchTerm = request()->get('search');

            if($searchTerm) {
                $products = $products->where(function($query) use ($searchTerm) {
                    $query->where('product_names.product_name', 'like', "%$searchTerm%")
                        ->orWhere('categories.category', 'like', "%$searchTerm%")
                        ->orWhere('suppliers.supplier', 'like', "%$searchTerm%");
                });
            }
        }

        $products = $products->paginate(25)
            ->appends(['search' => request()->get('search')]);

        return view('product.index', compact('categories', 'products', 'productCode'));
    }

    public function store(Request $request) {
        session(['action' => 'productStore']);
        $validated = $request->validate([
            'add_product_image' => ['nullable', 'mimes:png,jpg'],
            'add_product_code' => ['numeric', Rule::unique('products', 'product_code')],
            'add_product_name_id' => ['required', 'max:55'],
            'add_price' => ['required', 'numeric'],
            'add_quantity' => ['required', 'numeric'],
            'add_category_id' => ['nullable'],
            'add_supplier_id' => ['nullable', 'max:55'],
        ], [
            'add_product_image' => 'The product image field must be a file of type: png, jpg.',
            'add_product_name_id.required' => 'The product name field is required.',
            'add_product_name_id.max' => 'The product name field must not greater than 55 characters.',
            'add_price.required' => 'The price field is required.',
            'add_price.numeric' => 'The price field must be a number.',
            'add_quantity.required' => 'The quantity field is required.',
            'add_quantity.numeric' => 'The quantity field must be a number.',
            'add_category_id.required' => 'The category field is required.',
            'add_supplier_id.required' => 'The supplier field is required.',
            'add_supplier_id.max' => 'The supplier field must not greater than 55 characters.',
        ]);

        return dd($request);
    }
}
