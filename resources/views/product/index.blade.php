@extends('layout.main')

@section('content')

<title>PRODUCTS | POS SYSTEM</title>

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
                    <input type="text" class="form-control" id="search" name="search" placeholder="SEARCH FOR PRODUCTS..."
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
                            <p class="card-text"><strong>NAME:</strong><br>{{ $product->product_name }}</p>
                            <p class="card-text"><strong>PRICE:</strong><br>{{ $product->price }}</p>
                            <p class="card-text"><strong>STOCKS LEFT:</strong><br>{{ $product->quantity }}</p>
                            <p class="card-text"><strong>CATEGORY:</strong><br>{{ ($product->category) ? $product->category : 'N/A' }}</p>
                            <p class="card-text"><strong>SUPPLIER:</strong><br>{{ ($product->supplier) ? $product->supplier : 'N/A' }}</p>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-success w-100">EDIT</button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-danger w-100">DELETE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-3">
            {{ $products->links() }}
        </div>
        @include('include.product_modal')
    </div>
</main>

<script>

document.addEventListener('DOMContentLoaded', () => {
    @if ($errors->any() && session('action') == 'productStore')
        const addProductModal = new bootstrap.Modal(document.getElementById('addProductModal'));
        addProductModal.show();
    @endif
});

</script>

@endsection