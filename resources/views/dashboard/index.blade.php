@extends('layout.main')

@section('content')

<title>DASHBOARD | POS SYSTEM</title>

@include('include.sidebar')

<main id="main">
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">TOTAL SALES MADE LAST MONTH</h5>
                        <p class="card-text float-end">0.00</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">TOTAL SALES MADE THIS MONTH</h5>
                        <p class="card-text float-end">0.00</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">TOTAL SALES MADE YESTERDAY</h5>
                        <p class="card-text float-end">0.00</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">TOTAL SALES MADE TODAY</h5>
                        <p class="card-text float-end">0.00</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">NO. OF ITEM RETURNED TODAY</h5>
                        <p class="card-text float-end">0</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">MONEY RETURNED TODAY</h5>
                        <p class="card-text float-end">0.00</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">NO. OF ITEM EXPIRED</h5>
                        <p class="card-text float-end">0</p>
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
                                <th>FULL NAME</th>
                                <th>CONTACT NUMBER</th>
                                <th>EMAIL</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>JUAN DELA CRUZ</td>
                                <td>09123456789</td>
                                <td>juan.delacruz@example.com</td>
                                <td><a href="#" class="btn btn-danger">TIME OUT</a></td>
                            </tr>
                            <tr>
                                <td>JUAN DELA CRUZ</td>
                                <td>09123456789</td>
                                <td>juan.delacruz@example.com</td>
                                <td><a href="#" class="btn btn-danger">TIME OUT</a></td>
                            </tr>
                            <tr>
                                <td>JUAN DELA CRUZ</td>
                                <td>09123456789</td>
                                <td>juan.delacruz@example.com</td>
                                <td><a href="#" class="btn btn-danger">TIME OUT</a></td>
                            </tr>
                            <tr>
                                <td>JUAN DELA CRUZ</td>
                                <td>09123456789</td>
                                <td>juan.delacruz@example.com</td>
                                <td><a href="#" class="btn btn-danger">TIME OUT</a></td>
                            </tr>
                            <tr>
                                <td>JUAN DELA CRUZ</td>
                                <td>09123456789</td>
                                <td>juan.delacruz@example.com</td>
                                <td><a href="#" class="btn btn-danger">TIME OUT</a></td>
                            </tr>
                            <tr>
                                <td>JUAN DELA CRUZ</td>
                                <td>09123456789</td>
                                <td>juan.delacruz@example.com</td>
                                <td><a href="#" class="btn btn-danger">TIME OUT</a></td>
                            </tr>
                            <tr>
                                <td>JUAN DELA CRUZ</td>
                                <td>09123456789</td>
                                <td>juan.delacruz@example.com</td>
                                <td><a href="#" class="btn btn-danger">TIME OUT</a></td>
                            </tr>
                            <tr>
                                <td>JUAN DELA CRUZ</td>
                                <td>09123456789</td>
                                <td>juan.delacruz@example.com</td>
                                <td><a href="#" class="btn btn-danger">TIME OUT</a></td>
                            </tr>
                            <tr>
                                <td>JUAN DELA CRUZ</td>
                                <td>09123456789</td>
                                <td>juan.delacruz@example.com</td>
                                <td><a href="#" class="btn btn-danger">TIME OUT</a></td>
                            </tr>
                            <tr>
                                <td>JUAN DELA CRUZ</td>
                                <td>09123456789</td>
                                <td>juan.delacruz@example.com</td>
                                <td><a href="#" class="btn btn-danger">TIME OUT</a></td>
                            </tr>
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
                                <th>TRANSACTION NO.</th>
                                <th>PAYMENT METHOD</th>
                                <th>TOTAL AMOUNT DUE</th>
                                <th>DISCOUNT</th>
                                <th>GIVEN AMOUNT</th>
                                <th>CHANGE</th>
                                <th>DATE TRANSACTED</th>
                                <th>ACTION</th>
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
                            <tr>
                                <td>23863829104</td>
                                <td>GCASH</td>
                                <td>15,000.00</td>
                                <td>N/A</td>
                                <td>20,000.00</td>
                                <td>5,000.00</td>
                                <td>04/01/2024 11:20 PM</td>
                                <td><a href="#" class="btn btn-primary">REVIEW</a></td>
                            </tr>
                            <tr>
                                <td>23863829104</td>
                                <td>PAYMAYA</td>
                                <td>15,000.00</td>
                                <td>N/A</td>
                                <td>20,000.00</td>
                                <td>5,000.00</td>
                                <td>04/01/2024 11:20 PM</td>
                                <td><a href="#" class="btn btn-primary">REVIEW</a></td>
                            </tr>
                            <tr>
                                <td>23863829104</td>
                                <td>VISA</td>
                                <td>15,000.00</td>
                                <td>15%</td>
                                <td>20,000.00</td>
                                <td>5,000.00</td>
                                <td>04/01/2024 11:20 PM</td>
                                <td><a href="#" class="btn btn-primary">REVIEW</a></td>
                            </tr>
                            <tr>
                                <td>23863829104</td>
                                <td>PAYPAL</td>
                                <td>15,000.00</td>
                                <td>N/A</td>
                                <td>20,000.00</td>
                                <td>5,000.00</td>
                                <td>04/01/2024 11:20 PM</td>
                                <td><a href="#" class="btn btn-primary">REVIEW</a></td>
                            </tr>
                            <tr>
                                <td>23863829104</td>
                                <td>MASTERCARD</td>
                                <td>15,000.00</td>
                                <td>25%</td>
                                <td>20,000.00</td>
                                <td>5,000.00</td>
                                <td>04/01/2024 11:20 PM</td>
                                <td><a href="#" class="btn btn-primary">REVIEW</a></td>
                            </tr>
                            <tr>
                                <td>23863829104</td>
                                <td>CASH</td>
                                <td>15,000.00</td>
                                <td>N/A</td>
                                <td>20,000.00</td>
                                <td>5,000.00</td>
                                <td>04/01/2024 11:20 PM</td>
                                <td><a href="#" class="btn btn-primary">REVIEW</a></td>
                            </tr>
                            <tr>
                                <td>23863829104</td>
                                <td>GCASH</td>
                                <td>15,000.00</td>
                                <td>N/A</td>
                                <td>20,000.00</td>
                                <td>5,000.00</td>
                                <td>04/01/2024 11:20 PM</td>
                                <td><a href="#" class="btn btn-primary">REVIEW</a></td>
                            </tr>
                            <tr>
                                <td>23863829104</td>
                                <td>PAYMAYA</td>
                                <td>15,000.00</td>
                                <td>20%</td>
                                <td>20,000.00</td>
                                <td>5,000.00</td>
                                <td>04/01/2024 11:20 PM</td>
                                <td><a href="#" class="btn btn-primary">REVIEW</a></td>
                            </tr>
                            <tr>
                                <td>23863829104</td>
                                <td>VISA</td>
                                <td>15,000.00</td>
                                <td>N/A</td>
                                <td>20,000.00</td>
                                <td>5,000.00</td>
                                <td>04/01/2024 11:20 PM</td>
                                <td><a href="#" class="btn btn-primary">REVIEW</a></td>
                            </tr>
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
                                <th>TRANSACTION NO.</th>
                                <th>ITEM CODE</th>
                                <th>ITEM NAME</th>
                                <th>PRICE</th>
                                <th>QUANTITY</th>
                                <th>TOTAL PRICE</th>
                                <th>ACTION</th>
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
                            <tr>
                                <td>347968394</td>
                                <td>P-92376854</td>
                                <td>TOOTHPASTE</td>
                                <td>100.00</td>
                                <td>5</td>
                                <td>500.00</td>
                                <td><a href="#" class="btn btn-primary">UNDO</a></td>
                            </tr>
                            <tr>
                                <td>347968394</td>
                                <td>P-92376854</td>
                                <td>TOOTHPASTE</td>
                                <td>100.00</td>
                                <td>5</td>
                                <td>500.00</td>
                                <td><a href="#" class="btn btn-primary">UNDO</a></td>
                            </tr>
                            <tr>
                                <td>347968394</td>
                                <td>P-92376854</td>
                                <td>TOOTHPASTE</td>
                                <td>100.00</td>
                                <td>5</td>
                                <td>500.00</td>
                                <td><a href="#" class="btn btn-primary">UNDO</a></td>
                            </tr>
                            <tr>
                                <td>347968394</td>
                                <td>P-92376854</td>
                                <td>TOOTHPASTE</td>
                                <td>100.00</td>
                                <td>5</td>
                                <td>500.00</td>
                                <td><a href="#" class="btn btn-primary">UNDO</a></td>
                            </tr>
                            <tr>
                                <td>347968394</td>
                                <td>P-92376854</td>
                                <td>TOOTHPASTE</td>
                                <td>100.00</td>
                                <td>5</td>
                                <td>500.00</td>
                                <td><a href="#" class="btn btn-primary">UNDO</a></td>
                            </tr>
                            <tr>
                                <td>347968394</td>
                                <td>P-92376854</td>
                                <td>TOOTHPASTE</td>
                                <td>100.00</td>
                                <td>5</td>
                                <td>500.00</td>
                                <td><a href="#" class="btn btn-primary">UNDO</a></td>
                            </tr>
                            <tr>
                                <td>347968394</td>
                                <td>P-92376854</td>
                                <td>TOOTHPASTE</td>
                                <td>100.00</td>
                                <td>5</td>
                                <td>500.00</td>
                                <td><a href="#" class="btn btn-primary">UNDO</a></td>
                            </tr>
                            <tr>
                                <td>347968394</td>
                                <td>P-92376854</td>
                                <td>TOOTHPASTE</td>
                                <td>100.00</td>
                                <td>5</td>
                                <td>500.00</td>
                                <td><a href="#" class="btn btn-primary">UNDO</a></td>
                            </tr>
                            <tr>
                                <td>347968394</td>
                                <td>P-92376854</td>
                                <td>TOOTHPASTE</td>
                                <td>100.00</td>
                                <td>5</td>
                                <td>500.00</td>
                                <td><a href="#" class="btn btn-primary">UNDO</a></td>
                            </tr>
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
                                <th>ITEM CODE</th>
                                <th>ITEM NAME</th>
                                <th>PRICE</th>
                                <th>QUANTITY</th>
                                <th>ACTION</th>
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
                            <tr>
                                <td>P-23974925</td>
                                <td>CONDENSED MILK</td>
                                <td>50.00</td>
                                <td>5</td>
                                <td><a href="#" class="btn btn-danger">DISPOSE</a></td>
                            </tr>
                            <tr>
                                <td>P-23974925</td>
                                <td>CONDENSED MILK</td>
                                <td>50.00</td>
                                <td>5</td>
                                <td><a href="#" class="btn btn-danger">DISPOSE</a></td>
                            </tr>
                            <tr>
                                <td>P-23974925</td>
                                <td>CONDENSED MILK</td>
                                <td>50.00</td>
                                <td>5</td>
                                <td><a href="#" class="btn btn-danger">DISPOSE</a></td>
                            </tr>
                            <tr>
                                <td>P-23974925</td>
                                <td>CONDENSED MILK</td>
                                <td>50.00</td>
                                <td>5</td>
                                <td><a href="#" class="btn btn-danger">DISPOSE</a></td>
                            </tr>
                            <tr>
                                <td>P-23974925</td>
                                <td>CONDENSED MILK</td>
                                <td>50.00</td>
                                <td>5</td>
                                <td><a href="#" class="btn btn-danger">DISPOSE</a></td>
                            </tr>
                            <tr>
                                <td>P-23974925</td>
                                <td>CONDENSED MILK</td>
                                <td>50.00</td>
                                <td>5</td>
                                <td><a href="#" class="btn btn-danger">DISPOSE</a></td>
                            </tr>
                            <tr>
                                <td>P-23974925</td>
                                <td>CONDENSED MILK</td>
                                <td>50.00</td>
                                <td>5</td>
                                <td><a href="#" class="btn btn-danger">DISPOSE</a></td>
                            </tr>
                            <tr>
                                <td>P-23974925</td>
                                <td>CONDENSED MILK</td>
                                <td>50.00</td>
                                <td>5</td>
                                <td><a href="#" class="btn btn-danger">DISPOSE</a></td>
                            </tr>
                            <tr>
                                <td>P-23974925</td>
                                <td>CONDENSED MILK</td>
                                <td>50.00</td>
                                <td>5</td>
                                <td><a href="#" class="btn btn-danger">DISPOSE</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection