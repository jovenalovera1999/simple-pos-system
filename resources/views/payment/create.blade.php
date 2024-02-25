@extends('layout.main')

@section('content')

<title>ADD PAYMENT TRANSACTION | SIMPLE POS SYSTEM</title>
@include('include.nav')
<main id="main">
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">ADD PAYMENT TRANSACTION</h5>
                <div class="row">
                    <div class="col-sm-5">
                        <h6>PRODUCTS</h6>
                        <div class="col-sm-6">
                            <div class="mt-3 mb-2">
                                <form action="#" method="get">
                                    <label for="search" class="form-label">SEARCH</label>
                                    <input type="text" class="form-control" id="search" name="search" />
                                </form>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <th>TRANSACTION NO.</th>
                                    <th>NAME</th>
                                    <th>PRICE</th>
                                    <th>QUANTITY</th>
                                    <th>EXPIRATION DATE</th>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h6>CART</h6>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <th>TRANSACTION NO.</th>
                                    <th>NAME</th>
                                    <th>PRICE</th>
                                    <th>QUANTITY</th>
                                    <th>SUB TOTAL</th>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="customer_name" class="form-label">CUSTOMER NAME</label>
                            <input type="text" class="form-control" id="customer_name" name="customer_name" />
                        </div>
                        <div class="mb-3">
                            <label for="payment_method" class="form-label">PAYMENT METHOD</label>
                            <select class="form-select" name="payment_method" id="payment_method">
                                <option value="" selected>N/A</option>
                                <option value="">CASH</option>
                                <option value="">GCASH</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="transaction_no" class="form-label">TRANSACTION NO.</label>
                            <input type="text" class="form-control" id="transaction_no" name="transaction_no" disabled readonly />
                        </div>
                        <div class="mb-3">
                            <label for="total_amount" class="form-label">TOTAL AMOUNT</label>
                            <input type="text" class="form-control" id="total_amount" name="total_amount" disabled readonly />
                        </div>
                        <div class="mb-3">
                            <label for="discount" class="form-label">DISCOUNT</label>
                            <select class="form-select" name="discount" id="discount">
                                <option value="" selected>N/A</option>
                                <option value="">SENIOR CITIZEN</option>
                                <option value="">PWD</option>
                                <option value="">OTHERS</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="balance" class="form-label">BALANCE</label>
                            <input type="text" class="form-control" id="balance" name="balance" />
                        </div>
                        <div class="mb-3">
                            <label for="change" class="form-label">CHANGE</label>
                            <input type="text" class="form-control" id="change" name="change" disabled readonly />
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-primary w-100">PRINT</button>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-success w-100">SAVE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('include.button_back_to_top')

@endsection