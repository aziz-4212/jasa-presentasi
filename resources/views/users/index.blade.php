@extends('layouts.app')

@section('content')
    <section class="dashboard my-5">
        <div class="container">
            <section style="margin-top: 9rem;">
                <h5 style="font-size: 16px; font-weight:600; color:#FF4E3B;">Dashboard</h5>
                <h3  style="font-weight:600;">List Users</h3>
            </section>
            <div class="row my-5">
                <div class="col-lg-12 mb-4">
                    <div class="d-flex align-items-center gap-2 justify-content-between">
                        <div class="d-flex flex-column mb-0">
                            <p style="font-size: 20px; font-weight:600;">1</p>
                        </div>
                        <div class="d-flex flex-column mb-0">
                            <p style="font-size: 20px; font-weight:600;">admin</p>
                        </div>
                        <div class="d-flex flex-column mb-0">
                            <p style="font-size: 20px; font-weight:600;">admin@gmail.com</p>
                        </div>
                        <p class="text-success mb-0" style="font-weight: 500;">Admin</p>
                        <a href="#" class="btn btn-success">Action</a>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="d-flex align-items-center gap-2 justify-content-between">
                        <div class="d-flex flex-column mb-0">
                            <p style="font-size: 20px; font-weight:600;">2</p>
                        </div>
                        <div class="d-flex flex-column mb-0">
                            <p style="font-size: 20px; font-weight:600;">user</p>
                        </div>
                        <div class="d-flex flex-column mb-0">
                            <p style="font-size: 20px; font-weight:600;">user@gmail.com</p>
                        </div>
                        <p class="text-success mb-0" style="font-weight: 500;">User</p>
                        <a href="#" class="btn btn-success">Action</a>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="d-flex align-items-center gap-2 justify-content-between">
                        <div class="d-flex flex-column mb-0">
                            <p style="font-size: 20px; font-weight:600;">3</p>
                        </div>
                        <div class="d-flex flex-column mb-0">
                            <p style="font-size: 20px; font-weight:600;">dummy</p>
                        </div>
                        <div class="d-flex flex-column mb-0">
                            <p style="font-size: 20px; font-weight:600;">dummy@gmail.com</p>
                        </div>
                        <p class="text-success mb-0" style="font-weight: 500;">User</p>
                        <a href="#" class="btn btn-success">Action</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection