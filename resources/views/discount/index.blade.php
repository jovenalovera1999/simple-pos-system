@extends('layout.main')

@section('content')

<title>ADD AND LIST OF DISCOUNTS | SIMPLE POS SYSTEM</title>
@include('include.nav')
<main id="main">
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">ADD DISCOUNT | LIST OF DISCOUNTS</h5>
                <div class="row">
                    <div class="col-sm-4">
                        <form action="#" method="post">
                            <div class="mb-3">
                                <label for="discount" class="form-label">DISCOUNT</label>
                                <input type="text" class="form-control" id="discount" name="discount" />
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
                    <div class="col">
                        <div class="table-responsive mt-3">
                            <table class="table table-hover">
                                <thead>
                                    <th>DISCOUNT</th>
                                    <th>PERCENTAGE</th>
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