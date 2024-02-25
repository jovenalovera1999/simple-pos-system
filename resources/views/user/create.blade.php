@extends('layout.main')

@section('content')

<title>ADD EMPLOYEE | SIMPLE POS SYSTEM</title>
@include('include.nav')
<main id="main">
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">ADD EMPLOYEE</h5>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="first_name" class="form-label">FIRST NAME</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="middle_name" class="form-label">MIDDLE NAME</label>
                            <input type="text" class="form-control" id="middle_name" name="middle_name" />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="last_name" class="form-label">LAST NAME</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" />
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="mb-3">
                            <label for="payment_method" class="form-label">SUFFIX NAME</label>
                            <select class="form-select" name="payment_method" id="payment_method">
                                <option value="" selected>N/A</option>
                                <option value="">JR.</option>
                                <option value="">SR.</option>
                                <option value="">I</option>
                                <option value="">II</option>
                                <option value="">III</option>
                                <option value="">IV</option>
                                <option value="">V</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="mb-3">
                            <label for="payment_method" class="form-label">GENDER</label>
                            <select class="form-select" name="payment_method" id="payment_method">
                                <option value="" selected>N/A</option>
                                <option value="">MALE</option>
                                <option value="">FEMALE</option>
                                <option value="">OTHERS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="mb-3">
                            <label for="payment_method" class="form-label">AGE</label>
                            <select class="form-select" name="payment_method" id="payment_method">
                                <option value="" selected>N/A</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">999</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="address" class="form-label">ADDRESS</label>
                            <input type="text" class="form-control" id="address" name="address" />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="contact_no" class="form-label">CONTACT NO.</label>
                            <input type="text" class="form-control" id="contact_no" name="contact_no" />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="email" class="form-label">EMAIL ADDRESS</label>
                            <input type="text" class="form-control" id="email" name="email" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="payment_method" class="form-label">POSITION</label>
                            <select class="form-select" name="payment_method" id="payment_method">
                                <option value="" selected>N/A</option>
                                <option value="">OWNER</option>
                                <option value="">REGULAR EMPLOYEE</option>
                                <option value="">CLERK</option>
                            </select>
                        </div>
                    </div>
                </div>
                <h5 class="card-title mt-3">IN CASE OF AN EMEGERGENCY</h5>
                <div class="form-text"><i>IN CASE OF AN EMEGERGENCY, WHO SHOULD BE CONTACTED?</i></div>
                <div class="row mt-3">
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="first_name" class="form-label">FIRST NAME</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="middle_name" class="form-label">MIDDLE NAME</label>
                            <input type="text" class="form-control" id="middle_name" name="middle_name" />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="last_name" class="form-label">LAST NAME</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" />
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="mb-3">
                            <label for="payment_method" class="form-label">SUFFIX NAME</label>
                            <select class="form-select" name="payment_method" id="payment_method">
                                <option value="" selected>N/A</option>
                                <option value="">JR.</option>
                                <option value="">SR.</option>
                                <option value="">I</option>
                                <option value="">II</option>
                                <option value="">III</option>
                                <option value="">IV</option>
                                <option value="">V</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="payment_method" class="form-label">RELATIONSHIP TO THIS PERSON?</label>
                            <select class="form-select" name="payment_method" id="payment_method">
                                <option value="" selected>N/A</option>
                                <option value="">MOTHER</option>
                                <option value="">FATHER</option>
                                <option value="">GRANDMOTHER</option>
                                <option value="">GRANDFATHER</option>
                                <option value="">BROTHER</option>
                                <option value="">SISTER</option>
                                <option value="">UNCLE</option>
                                <option value="">AUNT</option>
                                <option value="">COUSIN</option>
                                <option value="">2ND COUSIN</option>
                                <option value="">3RD COUSIN</option>
                                <option value="">BOYFRIEND</option>
                                <option value="">GIRLFRIEND</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="last_name" class="form-label">CONTACT NO.</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="last_name" class="form-label">EMAIL ADDRESS</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="last_name" class="form-label">OCCUPATION</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" />
                        </div>
                    </div>
                </div>
                <h5 class="card-title mt-3">AUTHORIZATION</h5>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="last_name" class="form-label">USERNAME</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="last_name" class="form-label">PASSWORD</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="last_name" class="form-label">CONFIRM PASSWORD</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" />
                        </div>
                    </div>
                </div>
                {{-- <div class="col-sm-3 col-12 float-end">
                    <button type="submit" class="btn btn-success w-100">SAVE</button> --}}
                </div>
            </div>
        </div>
    </div>
</main>
@include('include.button_back_to_top')
    
@endsection