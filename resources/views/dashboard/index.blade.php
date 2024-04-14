@extends('layout.main')

@section('content')

<title>DASHBOARD | POS SYSTEM</title>

@include('include.sidebar')

<main id="main">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">TOTAL SALES MADE LAST MONTH</h5>
                        <p class="card-text text-end">0.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">TOTAL SALES MADE THIS MONTH</h5>
                        <p class="card-text text-end">0.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">TOTAL SALES MADE YESTERDAY</h5>
                        <p class="card-text text-end">0.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">TOTAL SALES MADE TODAY</h5>
                        <p class="card-text text-end">0.00</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">NO. OF ITEM RETURNED TODAY</h5>
                        <p class="card-text text-end">0</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">MONEY RETURNED TODAY</h5>
                        <p class="card-text text-end">0.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">NO. OF ITEM EXPIRED</h5>
                        <p class="card-text text-end">0</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">EMPLOYEES WERE ON DUTY</h5>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col-1">FULL NAME</th>
                                <th class="col-1">CONTACT NUMBER</th>
                                <th class="col-1">EMAIL</th>
                                <th class="col-1">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>JUAN DELA CRUZ</td>
                                <td>09123456789</td>
                                <td>juan.delacruz@example.com</td>
                                <td><a href="#" class="btn btn-danger">TIME OUT</a></td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">TRANSACTION HISTORY</h5>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col-1">TRANSACTION NO.</th>
                                <th class="col-1">PAYMENT METHOD</th>
                                <th class="col-1">TOTAL AMOUNT DUE</th>
                                <th class="col-1">DISCOUNT</th>
                                <th class="col-1">GIVEN AMOUNT</th>
                                <th class="col-1">CHANGE</th>
                                <th class="col-1">DATE TRANSACTED</th>
                                <th class="col-1">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>23863829104</td>
                                <td>CASH</td>
                                <td>15,000.00</td>
                                <td>20%</td>
                                <td>20,000.00</td>
                                <td>5,000.00</td>
                                <td>04/01/2024 11:20 PM</td>
                                <td><a href="#" class="btn btn-primary">REVIEW</a></td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">ITEM RETURNED TODAY</h5>
                <h6 class="card-text">TOTAL MONEY RETURNED: 30,500.00</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col-1">TRANSACTION NO.</th>
                                <th class="col-1">ITEM CODE</th>
                                <th class="col-1">ITEM NAME</th>
                                <th class="col-1">PRICE</th>
                                <th class="col-1">QUANTITY</th>
                                <th class="col-1">TOTAL PRICE</th>
                                <th class="col-1">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>347968394</td>
                                <td>P-92376854</td>
                                <td>TOOTHPASTE</td>
                                <td>100.00</td>
                                <td>5</td>
                                <td>500.00</td>
                                <td><a href="#" class="btn btn-primary">UNDO</a></td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">ITEM EXPIRED</h5>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col-1">ITEM CODE</th>
                                <th class="col-1">ITEM NAME</th>
                                <th class="col-1">PRICE</th>
                                <th class="col-1">QUANTITY</th>
                                <th class="col-1">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>P-23974925</td>
                                <td>CONDENSED MILK</td>
                                <td>50.00</td>
                                <td>5</td>
                                <td><a href="#" class="btn btn-danger">DISPOSE</a></td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection