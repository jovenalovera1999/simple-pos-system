@extends('layout.main')

@section('content')

@include('include.nav')
<main id="main" class="mt-3">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">EDIT PRODUCT</h3>
                <form action="#" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label for="code" class="form-label">CODE</label>
                                <input type="text" class="form-control" id="code" name="code" />
                                <p id="code_validation" class="text-danger fs-6"></p>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="mb-3">
                                <label for="name" class="form-label">NAME</label>
                                <input type="text" class="form-control" id="name" name="name" />
                                <p id="name_validation" class="text-danger fs-6"></p>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="mb-3">
                                <label for="price" class="form-label">PRICE</label>
                                <input type="text" class="form-control" id="price" name="price" />
                                <p id="price_validation" class="text-danger fs-6"></p>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="mb-3">
                                <label for="quantity" class="form-label">QUANTITY</label>
                                <input type="text" class="form-control" id="quantity" name="quantity" />
                                <p id="quantity_validation" class="text-danger fs-6"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label for="expiration_date" class="form-label">EXPIRATION DATE</label>
                                <input type="date" class="form-control" id="expiration_date" name="expiration_date" />
                                <p id="expiration_date_validation" class="text-danger fs-6"></p>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="mb-3">
                                <label for="supplier" class="form-label">SUPPLIER</label>
                                <input type="text" class="form-control" id="supplier" name="supplier" />
                                <p id="supplier_validation" class="text-danger fs-6"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-12 float-end">
                        <button type="submit" class="btn btn-success w-100">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@include('include.button_back_to_top')

@endsection