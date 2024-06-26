@extends('layout.main')

@section('content')

<title>ADD ORDER</title>

@include('include.sidebar')

<main id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5 class="mt-3 mb-3">PRODUCTS</h5>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="SEARCH FOR PRODUCTS..."
                        aria-label="SEARCH FOR PRODUCTS..." aria-describedby="search-button">
                    <button class="btn btn-outline-secondary" type="button" id="search-button">SEARCH</button>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4" style="overflow-x: auto; white-space: nowrap;">
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('img/products/buger.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text"><strong>NAME:</strong> BURGER</p>
                                <p class="card-text"><strong>PRICE:</strong> $50.00</p>
                                <p class="card-text"><strong>STOCKS LEFT:</strong> 87</p>
                                <button class="btn btn-primary w-100">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('img/products/buger.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text"><strong>NAME:</strong> BURGER</p>
                                <p class="card-text"><strong>PRICE:</strong> $50.00</p>
                                <p class="card-text"><strong>STOCKS LEFT:</strong> 87</p>
                                <button class="btn btn-primary w-100">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('img/products/buger.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text"><strong>NAME:</strong> BURGER</p>
                                <p class="card-text"><strong>PRICE:</strong> $50.00</p>
                                <p class="card-text"><strong>STOCKS LEFT:</strong> 87</p>
                                <button class="btn btn-primary w-100">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('img/products/buger.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text"><strong>NAME:</strong> BURGER</p>
                                <p class="card-text"><strong>PRICE:</strong> $50.00</p>
                                <p class="card-text"><strong>STOCKS LEFT:</strong> 87</p>
                                <button class="btn btn-primary w-100">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('img/products/buger.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text"><strong>NAME:</strong> BURGER</p>
                                <p class="card-text"><strong>PRICE:</strong> $50.00</p>
                                <p class="card-text"><strong>STOCKS LEFT:</strong> 87</p>
                                <button class="btn btn-primary w-100">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('img/products/buger.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text"><strong>NAME:</strong> BURGER</p>
                                <p class="card-text"><strong>PRICE:</strong> $50.00</p>
                                <p class="card-text"><strong>STOCKS LEFT:</strong> 87</p>
                                <button class="btn btn-primary w-100">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat this card structure for other products -->
                </div>
            </div>
            <div class="col">
                <h5 class="mt-3 mb-3">CART</h5>
                <form action="#" method="post">
                    @csrf
                    <div class="table-responsive mb-3">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="col-3">NAME</th>
                                    <th class="col-2">PRICE</th>
                                    <th class="col-2">QUANTITY</th>
                                    <th class="col-2">SUBTOTAL</th>
                                    <th class="col-3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Add rows dynamically here -->
                            </tbody>
                        </table>
                    </div>
                    <p><strong>TOTAL PRICE TO PAY:</strong> $0.00</p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary col-12 col-md-3 float-end" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        CHECKOUT
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">PAYMENT TRANSACTION</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="#" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="transaction_number" class="form-label">TRANSACTION NO.</label>
                                            <input type="text" class="form-control" id="transaction_number"
                                                name="transaction_number">
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
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">CANCEL</button>
                                            <button type="submit" class="btn btn-success">SAVE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection