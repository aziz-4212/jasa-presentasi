@extends('layouts.admin')

@section('content')
<div class="col-12 col-md-9 col-xl-10">
    <div class="container-lg mt-5">
        
        <!-- Form -->
        <form class="mt-5 w-auto mx-auto">
            <fieldset>
                <legend>General</legend>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan Nama">
                </div>
                <div class="mb-3">
                    <label for="permission" class="form-label">Permission</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Role A
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Role B
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Role C
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Role C
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn px-4 py-2 text-white mb-2 w-100" style="background-color: #2F80ED;">Save Changes</button>
            </fieldset>
        </form>
    </div>
</div>
@endsection