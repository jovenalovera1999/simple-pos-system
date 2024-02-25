@extends('layout.main')

@section('content')

@include('include.nav')
<main id="main">
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">LIST OF PRODUCTS</h5>
                <div class="col-sm-3 col-12 float-start">
                    <form action="#" method="get">
                        <div class="mb-3">
                            <label for="search_product" class="form-label">SEARCH</label>
                            <input type="text" class="form-control" id="search_product" name="search_product" />
                        </div>
                    </form>
                </div>
                <div class="col-sm-3 col-12 float-end">
                    <a href="#" class="btn btn-primary mt-4 w-100">ADD PRODUCT</a>
                </div>
                <div class="col col-12 table-responsive">
                    <table class="table table-hover mt-3">
                        <thead>
                            <th>CODE</th>
                            <th>NAME</th>
                            <th>PRICE</th>
                            <th>QUANTITY</th>
                            <th>EXPIRATION DATE</th>
                            <th>SUPPLIER</th>
                            <th>DATE CREATED</th>
                            <th>DATE UPDATED</th>
                            <th>ACTION</th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@include('include.button_back_to_top')

@endsection