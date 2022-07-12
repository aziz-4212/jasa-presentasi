@extends('layouts.admin')

@section('content')
<div class="col-12 col-md-9 col-xl-10">
    <div class="container-lg mt-5">
        
        <!-- Form -->
        <form class="mt-5 w-auto mx-auto">
            <fieldset>
                <legend>Mail</legend>
                <div class="mb-3">
                    <label for="name" class="form-label">Mail From Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Ex. Michel">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Mail From Address</label>
                    <input type="text" id="address" name="address" class="form-control" placeholder="Ex. michel@gmail.com">
                </div>
                <div class="mb-3">
                    <label for="driver" class="form-label">Mail Driver</label>
                    <input type="text" id="driver" name="driver" class="form-control" placeholder="Ex. smtp">
                </div>
                <div class="mb-3">
                    <label for="host" class="form-label">Mail HOST</label>
                    <input type="text" id="host" name="host" class="form-control" placeholder="Ex. smtp.gmail.com">
                </div>
                <div class="mb-3">
                    <label for="port" class="form-label">Mail PORT</label>
                    <input type="text" id="port" name="port" class="form-control" placeholder="Ex. 587">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Mail Username</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Ex. michel@gmail.com">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mail Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="************">
                </div>
                <div class="mb-3">
                    <label for="http" class="form-label">HTTP</label>
                    <input type="text" id="http" name="http" class="form-control" placeholder="Ex. tls">
                </div>
                <button type="submit" class="btn px-4 py-2 text-white mb-2 w-100" style="background-color: #2F80ED;">Save Changes</button>
            </fieldset>
        </form>
    </div>
</div>
@endsection