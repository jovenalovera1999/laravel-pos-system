@extends('layout.main')

@section('content')

<title>PAYMENT TRANSACTION</title>

@include('include.sidebar')

<main id="main">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="mt-3 mb-4">PRODUCTS</h5>
            <button class="btn btn-primary btn-md mb-3" data-bs-toggle="modal" data-bs-target="#addProductModal">ADD
                PRODUCT</button>
        </div>
        <div class="row">
            <form action="/products" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="SEARCH FOR PRODUCTS..."
                        aria-label="SEARCH FOR PRODUCTS..." aria-describedby="search-button">
                    <button class="btn btn-outline-secondary" type="button" id="search-button">SEARCH</button>
                </div>
            </form>
        </div>
        {{ $products->links() }}
        <div class="row row-cols-1 row-cols-md-5 g-4">
            <!-- Your card elements here -->
            @foreach ($products as $product)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('img/products/buger.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><strong>NAME:</strong> {{ $product->product_name }}</p>
                            <p class="card-text"><strong>PRICE:</strong> {{ $product->price }}</p>
                            <p class="card-text"><strong>STOCKS LEFT:</strong> {{ $product->quantity }}</p>
                            <p class="card-text"><strong>CATEGORY:</strong> {{ ($product->category) ? $product->category : 'N/A' }}</p>
                            <button class="btn btn-primary w-100">ADD TO CART</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-3">
            {{ $products->links() }}
        </div>
    </div>
</main>

<!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add your form fields for adding a product here -->
                <form action="#" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="transaction_number" class="form-label">TRANSACTION NO.</label>
                        <input type="text" class="form-control" id="transaction_number" name="transaction_number">
                    </div>
                    <div class="mb-3">
                        <label for="method_id" class="form-label">PAYMENT METHOD</label>
                        <select class="form-select" id="method_id" name="method_id">
                            <option selected>N/A</option>
                            <option>CASH</option>
                            <option>GCASH</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name_id" class="form-label">CUSTOMER NAME</label>
                        <input type="text" class="form-control" id="name_id" name="name_id">
                    </div>
                    <div class="mb-3">
                        <label for="total_price" class="form-label">TOTAL PRICE</label>
                        <input type="text" class="form-control" id="total_price" name="total_price">
                    </div>
                    <div class="mb-3">
                        <label for="discount_id" class="form-label">DISCOUNT</label>
                        <select class="form-select" id="discount_id" name="discount_id">
                            <option selected>N/A</option>
                            <option>SENIOR CITIZEN</option>
                            <option>PWD</option>
                            <option>VIP</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">AMOUNT</label>
                        <input type="text" class="form-control" id="amount" name="amount">
                    </div>
                    <div class="mb-3">
                        <label for="change" class="form-label">CHANGE</label>
                        <input type="text" class="form-control" id="change" name="change">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-success">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection