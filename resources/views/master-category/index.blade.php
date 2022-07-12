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
                    <th scope="col">Publish</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Category A</td>
                    <td>Publish</td>
                    <td class="d-flex align-items-center gap-2">
                        <a href="" class="btn btn-warning text-white">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Category B</td>
                    <td>Publish</td>
                    <td class="d-flex align-items-center gap-2">
                        <a href="" class="btn btn-warning text-white">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Category 3</td>
                    <td>Publish</td>
                    <td class="d-flex align-items-center gap-2">
                        <a href="" class="btn btn-warning text-white">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr>
        <!-- Form -->
        {{-- <form class="mt-5 w-auto mx-auto">
            <fieldset>
                <legend>Form</legend>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" id="nama" class="form-control" placeholder="Masukkan Nama">
                </div>
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Status</label>
                    <select id="disabledSelect" class="form-select">
                    <option>Aktif</option>
                    <option>Tidak aktif</option>
                    </select>
                </div>
                <button type="submit" class="btn px-4 py-2 text-white mb-2 w-100" style="background-color: #2F80ED;">Submit</button>
            </fieldset>
        </form> --}}
    </div>
</div>
@include('master-category.modal')
@endsection