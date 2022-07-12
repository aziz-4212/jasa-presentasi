@extends('layouts.admin')

@section('content')
<div class="col-12 col-md-9 col-xl-10">
    <div class="container-lg mt-5">
        
        <!-- Form -->
        <form class="mt-5 w-auto mx-auto">
            <fieldset>
                <legend>General</legend>
                <div class="mb-3">
                    <label for="name" class="form-label">Name App</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan Nama">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Description App</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="logo" class="form-label">Logo app</label>
                    <input type="file" id="logo" name="logo" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="favicon" class="form-label">Favicon</label>
                    <input type="file" id="favicon" name="favicon" class="form-control">
                </div>
                <button type="submit" class="btn px-4 py-2 text-white mb-2 w-100" style="background-color: #2F80ED;">Save Changes</button>
            </fieldset>
        </form>
    </div>
</div>
@endsection