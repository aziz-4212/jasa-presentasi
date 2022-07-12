@extends('layouts.admin')

@section('content')
<div class="col-12 col-md-9 col-xl-10">
    <div class="container-lg mt-5">
        <a href="{{route('course.create')}}" type="button" class="btn px-4 py-2 text-white mb-2 float-end" style="background-color: #2F80ED;">Tambah</a>
        <table class="table table-borderless">
            <thead class="text-black bg-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">category</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">price</th>
                    <th scope="col">publish</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Category A</td>
                    <td>title A</td>
                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore a dolor commodi ea quas voluptatibus doloribus, alias iste sint unde obcaecati quos impedit cum nobis neque dolores cumque quasi saepe.</td>
                    <td>100000</td>
                    <td>Publish</td>
                    <td class="d-flex align-items-center gap-2">
                        <a href="{{route('course.show', [1])}}" class="btn btn-success text-white">Show</a>
                        <a href="" class="btn btn-warning text-white">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Category A</td>
                    <td>title A</td>
                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore a dolor commodi ea quas voluptatibus doloribus, alias iste sint unde obcaecati quos impedit cum nobis neque dolores cumque quasi saepe.</td>
                    <td>100000</td>
                    <td>Publish</td>
                    <td class="d-flex align-items-center gap-2">
                        <a href="{{route('course.show', [1])}}" class="btn btn-success text-white">Show</a>
                        <a href="" class="btn btn-warning text-white">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Category B</td>
                    <td>title B</td>
                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore a dolor commodi ea quas voluptatibus doloribus, alias iste sint unde obcaecati quos impedit cum nobis neque dolores cumque quasi saepe.</td>
                    <td>200000</td>
                    <td>Publish</td>
                    <td class="d-flex align-items-center gap-2">
                        <a href="{{route('course.show', [1])}}" class="btn btn-success text-white">Show</a>
                        <a href="" class="btn btn-warning text-white">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Category C</td>
                    <td>title C</td>
                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore a dolor commodi ea quas voluptatibus doloribus, alias iste sint unde obcaecati quos impedit cum nobis neque dolores cumque quasi saepe.</td>
                    <td>300000</td>
                    <td>Publish</td>
                    <td class="d-flex align-items-center gap-2">
                        <a href="{{route('course.show', [1])}}" class="btn btn-success text-white">Show</a>
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