@section('title', 'Create Contractor')
@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
    <div class="edit-profile">
        <form class="card" id="createContractorForm" action="#" method="POST">
            @csrf
            <div class="card-header">
                <div class="card-options">
                    <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i
                            class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#"
                        data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="row custom-input">
                    <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="name">Name <span class="text-danger">*</span></label>
                            <input class="form-control" id="name"
                                type="text" placeholder="Enter Contractor Name" name="name" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="email">Email Address <span
                                    class="text-danger">*</span></label><input class="form-control" id="email"
                                type="email" placeholder="Enter Email Address" name="email" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="company">Company Name <span class="text-danger">*</span></label>
                            <input class="form-control" id="company"
                                type="text" placeholder="Enter Company Name" name="company" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="phone">Phone Number <span class="text-danger">*</span></label>
                            <input class="form-control" id="phone"
                                type="text" placeholder="Enter Phone Number" name="phone" />
                        </div>
                    </div>
                    {{-- <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="license">License Number</label>
                            <input class="form-control" id="license"
                                type="text" placeholder="Enter License Number" name="license" />
                        </div>
                    </div> --}}
                    <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="specialization">Specialization</label>
                            <input class="form-control" id="specialization"
                                type="text" placeholder="Enter Specialization" name="specialization" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="password">Password <span
                                    class="text-danger">*</span></label><input class="form-control" id="password"
                                type="password" placeholder="Enter Password" name="password" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="confirm_password">Confirm Password</label><input
                                class="form-control" id="confirm_password" type="password"
                                placeholder="Enter Confirm Password" name="password_confirmation" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button class="btn btn-primary" type="submit">
                    Create
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
