@extends('layouts.admin')

@section('content')
<div class="col-12 col-md-9 col-xl-10">
    <div class="container-lg mt-5">
        
        <!-- Form -->
        <form class="mt-5 w-auto mx-auto">
            <fieldset>
                <legend>Course</legend>
                <div class="mb-3">
                    <label for="role" class="form-label">Category</label>
                    <select id="category" name="category" class="form-select">
                        <option>Select Category....</option>
                        <option>Category A</option>
                        <option>Category B</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="Ex. Course Programing">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" id="price" name="price" class="form-control" placeholder="Ex. 100000">
                </div>
                <div class="mb-3">
                    <label for="strike_price" class="form-label">Strike Price</label>
                    <input type="number" id="strike_price" name="strike_price" class="form-control" placeholder="Ex. 100000">
                </div>
                <div class="mb-3">
                    <label for="thumbnail" class="form-label">Thumbnail</label>
                    <input type="file" id="thumbnail" name="thumbnail" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="publish" class="form-label">Publish</label>
                    <select id="publish" name="publish" class="form-select">
                        <option>Publish</option>
                        <option>Not Publish</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="meta_title" class="form-label">Meta Title</label>
                    <input type="text" id="meta_title" name="meta_title" class="form-control" placeholder="Ex. Course Programing">
                </div>
                <div class="mb-3">
                    <label for="meta_description" class="form-label">Meta Description</label>
                    <textarea name="meta_description" id="meta_description" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="meta_keyword" class="form-label">Meta Keyword</label>
                    <input type="text" id="meta_keyword" name="meta_keyword" class="form-control" placeholder="Ex. Course Programing">
                </div>
                <button type="submit" class="btn px-4 py-2 text-white mb-2 w-100" style="background-color: #2F80ED;">Save Changes</button>
            </fieldset>
        </form>
    </div>
</div>
@endsection