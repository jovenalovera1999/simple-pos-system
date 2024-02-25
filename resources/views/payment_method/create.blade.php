@extends('layout.main')

@section('content')

@include('include.nav')
<main id="main">
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">ADD PAYMENT METHOD</h5>
                <div class="row">
                    <div class="col-sm-4">
                        <form action="#" method="post">
                            <div class="mb-3">
                                <label for="payment_method" class="form-label">PAYMENT METHOD</label>
                                <input type="text" class="form-control" id="payment_method" name="payment_method" />
                            </div>
                            <div class="col-sm-5 col-12 float-end">
                                <button type="button" class="btn btn-success w-100">SAVE</button>
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <div class="table-responsive mt-3">
                            <table class="table table-hover">
                                <thead>
                                    <th>PAYMENT METHOD</th>
                                    <th>ACTION</th>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('include.button_back_to_top')

@endsection