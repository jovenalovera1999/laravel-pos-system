@extends('layout.main')

@section('content')

<title>PAYMENT TRANSACTION</title>

@include('include.sidebar')

<main id="main">
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">TRANSACTIONS</h5>
                <!-- Search box -->
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="SEARCH" aria-label="SEARCH"
                        aria-describedby="search-button">
                    <button class="btn btn-outline-secondary" type="button" id="search-button">SEARCH</button>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col-1">TRANSACTION NO.</th>
                                <th class="col-1">PAYMENT METHOD</th>
                                <th class="col-1">CUSTOMER NAME</th>
                                <th class="col-1">DISCOUNT</th>
                                <th class="col-1">AMOUNT</th>
                                <th class="col-1">CHANGE</th>
                                <th class="col-1">ACTION</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection