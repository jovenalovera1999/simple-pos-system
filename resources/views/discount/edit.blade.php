@extends('layout.main')

@section('content')

<title>EDIT DISCOUNT | SIMPLE POS SYSTEM</title>
@include('include.nav')
<main id="main">
    <div class="container">
        <div class="card col-12 col-sm-4 mx-auto mt-3">
            <div class="card-body">
                <h5 class="card-title">EDIT DISCOUNT</h5>
                <div class="row">
                    <div class="col">
                        <form action="#" method="post">
                            <div class="mb-3">
                                <label for="payment_method" class="form-label">DISCOUNT</label>
                                <input type="text" class="form-control" id="payment_method" name="payment_method" />
                            </div>
                            <div class="mb-3">
                                <label for="percentage" class="form-label">PERCENTAGE</label>
                                <input type="text" class="form-control" id="percentage" name="percentage" />
                            </div>
                            <div class="col-sm-5 col-12 float-end">
                                <button type="button" class="btn btn-success w-100">SAVE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('include.button_back_to_top')

@endsection