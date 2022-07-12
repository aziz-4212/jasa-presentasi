@extends('layouts.admin')

@section('content')
<div class="col-12 col-md-9 col-xl-10">
    <div class="container-lg mt-5">
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <td class="col-md-2 text-black bg-light">Name</td>
                    <td class="col-md-1">:</td>
                    <td class="col-md-9">Michel</td>
                </tr>
                <tr>
                    <td class="col-md-2 text-black bg-light">Email</td>
                    <td class="col-md-1">:</td>
                    <td class="col-md-9">michel@gmail.com</td>
                </tr>
                <tr>
                    <td class="col-md-2 text-black bg-light">Role</td>
                    <td class="col-md-1">:</td>
                    <td class="col-md-9">Admin</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection