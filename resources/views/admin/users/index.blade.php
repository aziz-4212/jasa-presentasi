@extends('layouts.admin')

@section('content')
<div class="col-12 col-md-9 col-xl-10">
    <div class="container-lg mt-5">
        <!-- Table -->
        <button type="button" class="btn px-4 py-2 text-white mb-2 float-end" style="background-color: #2F80ED;" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah
        </button>
        <!-- spacer -->
        <table class="table table-borderless">
            <thead class="text-black bg-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Dummy A</td>
                    <td>dummy@gmail.com</td>
                    <td>Admin</td>
                    <td class="d-flex align-items-center gap-2">
                        <a href="{{route('users.show', [1])}}" class="btn btn-success text-white">Show</a>
                        <a href="" class="btn btn-warning text-white">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Dummy B</td>
                    <td>dummyb@gmail.com</td>
                    <td>User</td>
                    <td class="d-flex align-items-center gap-2">
                        <a href="" class="btn btn-success text-white">Show</a>
                        <a href="" class="btn btn-warning text-white">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Dummy C</td>
                    <td>dummyc@gmail.com</td>
                    <td>User</td>
                    <td class="d-flex align-items-center gap-2">
                        <a href="" class="btn btn-success text-white">Show</a>
                        <a href="" class="btn btn-warning text-white">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@include('admin.users.modal')
@include('admin.users.delete')
@endsection