@extends('layout.main')

@section('content')

<title>ADMIN DASHBOARD</title>
@include('include.nav')
<main id="main">
    <div class="container">
        <section>
            <div class="row mb-3">
                <h4>SALES</h4>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">TOTAL SALES MADE TODAY</h5>
                            <p class="float-end">0</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">TOTAL SALES MADE THIS WEEK</h5>
                            <p class="float-end">0</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">TOTAL SALES MADE THIS MONTH</h5>
                            <p class="float-end">0</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <h4>PRODUCTS</h4>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">TOTAL PRODUCTS AVAILABLE</h5>
                            <p class="float-end">0</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">TOTAL PRODUCTS UNAVAILABLE</h5>
                            <p class="float-end">0</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@include('include.button_back_to_top')
    
@endsection