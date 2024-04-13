@extends('layout.main')

@section('content')

<title>ADD ORDER</title>

@include('include.sidebar')

<main id="main">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-7">
                <h5 class="mb-3">PRODUCTS</h5>
                <div class="mb-3 col-md-5">
                    <label for="search">SEARCH</label>
                    <input type="text" class="form-control" id="search" name="search" />
                </div>
                <div class="card col-md-3 float-start m-1">
                    <div class="card-body">
                        <img src="{{ asset('img/products/buger.png') }}" class="img-fluid" />
                        <p class="mt-3"><strong>NAME:</strong> BURGER</p>
                        <p><strong>PRICE:</strong> 50.00</p>
                        <p class="mt-3"><strong>STOCKS LEFT:</strong> 87</p>
                        <button class="btn btn-primary w-100">ADD TO CART</button>
                    </div>
                </div>
                <div class="card col-md-3 float-start m-1">
                    <div class="card-body">
                        <img src="{{ asset('img/products/buger.png') }}" class="img-fluid" />
                        <p class="mt-3"><strong>NAME:</strong> BURGER</p>
                        <p><strong>PRICE:</strong> 50.00</p>
                        <p class="mt-3"><strong>STOCKS LEFT:</strong> 87</p>
                        <button class="btn btn-primary w-100">ADD TO CART</button>
                    </div>
                </div>
                <div class="card col-md-3 float-start m-1">
                    <div class="card-body">
                        <img src="{{ asset('img/products/buger.png') }}" class="img-fluid" />
                        <p class="mt-3"><strong>NAME:</strong> BURGER</p>
                        <p><strong>PRICE:</strong> 50.00</p>
                        <p class="mt-3"><strong>STOCKS LEFT:</strong> 87</p>
                        <button class="btn btn-primary w-100">ADD TO CART</button>
                    </div>
                </div>
                <div class="card col-md-3 float-start m-1">
                    <div class="card-body">
                        <img src="{{ asset('img/products/buger.png') }}" class="img-fluid" />
                        <p class="mt-3"><strong>NAME:</strong> BURGER</p>
                        <p><strong>PRICE:</strong> 50.00</p>
                        <p class="mt-3"><strong>STOCKS LEFT:</strong> 87</p>
                        <button class="btn btn-primary w-100">ADD TO CART</button>
                    </div>
                </div>
                <div class="card col-md-3 float-start m-1">
                    <div class="card-body">
                        <img src="{{ asset('img/products/buger.png') }}" class="img-fluid" />
                        <p class="mt-3"><strong>NAME:</strong> BURGER</p>
                        <p><strong>PRICE:</strong> 50.00</p>
                        <p class="mt-3"><strong>STOCKS LEFT:</strong> 87</p>
                        <button class="btn btn-primary w-100">ADD TO CART</button>
                    </div>
                </div>
                <div class="card col-md-3 float-start m-1">
                    <div class="card-body">
                        <img src="{{ asset('img/products/buger.png') }}" class="img-fluid" />
                        <p class="mt-3"><strong>NAME:</strong> BURGER</p>
                        <p><strong>PRICE:</strong> 50.00</p>
                        <p class="mt-3"><strong>STOCKS LEFT:</strong> 87</p>
                        <button class="btn btn-primary w-100">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <h5 class="mb-3">CART</h5>
                <div class="table-responsive mb-3">
                    <table class="table">
                        <thead>
                            <th class="col-1">NAME</th>
                            <th class="col-1">PRICE</th>
                            <th class="col-1">QUANTITY</th>
                            <th class="col-1">SUBTOTAL</th>
                        </thead>
                        <tbody>
        
                        </tbody>
                    </table>
                </div>
                <p><strong>TOTAL PRICE TO PAY:</strong> 0.00</p>
            </div>
        </div>
    </div>
</main>

@endsection