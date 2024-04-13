@extends('layout.main')

@section('content')

<title>PAYMENT TRANSACTION</title>

@include('include.sidebar')

<main id="main">
    <div class="container">
        <div class="card col-md-4 mt-3 mx-auto">
            <div class="card-body">
                <h5 class="card-title">PAYMENT TRANSACTION</h5>
                <form action="#" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="method_id">PAYMENT METHOD</label>
                            <select name="method_id" id="method_id" class="form-select">
                                <option selected>N/A</option>
                                <option>CASH</option>
                                <option>GCASH</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name_id">CUSTOMER NAME</label>
                            <input type="text" class="form-control" id="name_id" name="name_id" />
                        </div>
                        <div class="mb-3">
                            <label for="total_price">TOTAL PRICE</label>
                            <input type="text" class="form-control" id="total_price" name="total_price" />
                        </div>
                        <div class="mb-3">
                            <label for="discount_id">DISCOUNT</label>
                            <select name="discount_id" id="discount_id" class="form-select">
                                <option selected>N/A</option>
                                <option>SENIOR CITIZEN</option>
                                <option>PWD</option>
                                <option>VIP</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="amount">AMOUNT</label>
                            <input type="text" class="form-control" id="amount" name="amount" />
                        </div>
                        <div class="mb-3">
                            <label for="change">CHANGE</label>
                            <input type="text" class="form-control" id="change" name="change" />
                        </div>
                        <button type="submit" class="btn btn-success col-12 col-md-5 float-end m-1">SAVE</button>
                        <a href="#" class="btn btn-secondary col-12 col-md-5 float-end m-1">CANCEL</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection