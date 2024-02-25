@extends('layout.main')

@section('content')

<title>LIST OF EMPLOYEES | SIMPLE POS SYSTEM</title>
@include('include.nav')
<main id="main">
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">LIST OF EMPLOYEES</h5>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="mt-3 mb-3">
                            <form action="#" method="get">
                                <label for="search_employee" class="form-label">SEARCH</label>
                                <input type="text" class="form-control" id="search_employee" name="search_employee" />
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="#" class="btn btn-primary mt-5 w-100">NEW EMPLOYEE</a>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <th>FULL NAME</th>
                                <th>POSITION</th>
                                <th>STATUS</th>
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