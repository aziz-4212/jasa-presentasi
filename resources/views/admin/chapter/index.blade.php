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
                    <th scope="col">Course</th>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Course A</td>
                    <td>Chapter A</td>
                    <td class="d-flex align-items-center gap-2">
                        <a href="" class="btn btn-warning text-white">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Course B</td>
                    <td>Chapter B</td>
                    <td class="d-flex align-items-center gap-2">
                        <a href="" class="btn btn-warning text-white">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr>
    </div>
</div>
@include('admin.chapter.modal')
@include('admin.chapter.delete')
@endsection