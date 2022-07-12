@extends('layouts.admin')

@section('content')
<div class="col-12 col-md-9 col-xl-10">
    <div class="container-lg mt-5">
        <!-- Table -->
        <a href="{{route('roles.create')}}" type="button" class="btn px-4 py-2 text-white mb-2 float-end" style="background-color: #2F80ED;">Tambah</a>
        {{-- <button type="button" class="btn px-4 py-2 text-white mb-2 float-end" style="background-color: #2F80ED;" href="{{route('roles.create')}}">
            Tambah
        </button> --}}
        <!-- spacer -->
        <table class="table table-borderless">
            <thead class="text-black bg-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Role</th>
                    <th scope="col">Permissions</th>
                    <th scope="col">Number Of Users</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Admin</td>
                    <td>All</td>
                    <td>1</td>
                    <td class="d-flex align-items-center gap-2">
                        <a href="{{route('roles.show', [1])}}" class="btn btn-success text-white">Show</a>
                        <a href="" class="btn btn-warning text-white">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>User</td>
                    <td>Blog-list, Blog-create, Blog-edit, Category-blog-list, Category-blog-create,</td>
                    <td>3</td>
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
@include('admin.users.delete')
@endsection