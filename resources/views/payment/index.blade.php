@extends('layout.main')

@section('content')

@include('include.nav')
<main id="main">
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">LIST OF PAYMENT TRANSACTIONS</h5>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="mt-3 mb-3">
                            <form action="#" method="get">
                                <label for="search" class="form-label">SEARCH</label>
                                <input type="text" class="form-control" id="search" name="search" />
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="#" class="btn btn-primary mt-5 w-100">NEW TRANSACTION</a>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <th>TRANSACTION NO.</th>
                                <th>CUSTOMER NAME</th>
                                <th>PAYMENT METHOD</th>
                                <th>TRANSACTION NO.</th>
                                <th>TOTAL AMOUNT</th>
                                <th>DISCOUNT</th>
                                <th>BALANCE</th>
                                <th>CHANGE</th>
                                <th>DATE CREATED</th>
                                <th>DATE UPDATED</th>
                                <th>ACTION</th>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('include.button_back_to_top')
    
@endsection