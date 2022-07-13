@extends('layouts.admin')

@section('content')
<div class="col-12 col-md-9 col-xl-10">
    <div class="container-lg mt-5">
        <table class="table table-borderless">
            <thead class="text-black bg-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Course</th>
                    <th scope="col">User</th>
                    <th scope="col">Title</th>
                    <th scope="col">Payment Status</th>
                    <th scope="col">Midtrans Url</th>
                    <th scope="col">Midtrans Booking Code</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>100000</td>
                    <td>Course A</td>
                    <td>Michel</td>
                    <td>Title A</td>
                    <td>Active</td>
                    <td>https://midtrans.com</td>
                    <td>123</td>
                    <td class="d-flex align-items-center gap-2">
                        <a href="{{route('payment.show', [1])}}" class="btn btn-success text-white">Show</a>
                        <a href="" class="btn btn-warning text-white">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>100000</td>
                    <td>Course A</td>
                    <td>Michel</td>
                    <td>Title A</td>
                    <td>Active</td>
                    <td>https://midtrans.com</td>
                    <td>123</td>
                    <td class="d-flex align-items-center gap-2">
                        <a href="{{route('payment.show', [1])}}" class="btn btn-success text-white">Show</a>
                        <a href="" class="btn btn-warning text-white">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>100000</td>
                    <td>Course A</td>
                    <td>Michel</td>
                    <td>Title A</td>
                    <td>Active</td>
                    <td>https://midtrans.com</td>
                    <td>123</td>
                    <td class="d-flex align-items-center gap-2">
                        <a href="{{route('payment.show', [1])}}" class="btn btn-success text-white">Show</a>
                        <a href="" class="btn btn-warning text-white">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>100000</td>
                    <td>Course A</td>
                    <td>Michel</td>
                    <td>Title A</td>
                    <td>Active</td>
                    <td>https://midtrans.com</td>
                    <td>123</td>
                    <td class="d-flex align-items-center gap-2">
                        <a href="{{route('payment.show', [1])}}" class="btn btn-success text-white">Show</a>
                        <a href="" class="btn btn-warning text-white">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>
@include('admin.users.delete')
@endsection