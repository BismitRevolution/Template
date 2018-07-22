
@extends('main')

@section('content')
<form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <blockquote class="blockquote">
        <footer class="blockquote-footer">Required Field</footer>
    </blockquote>

    <div class="form-group row">
        <label for="title" class="col-sm-4 col-form-label">Title</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="description" class="col-sm-4 col-form-label">Body</label>
        <div class="col-sm-8">
            <textarea type="text" class="form-control" name="body" required></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="photos" class="col-sm-4 col-form-label">Photo</label>
        <div class="col-sm-8">
            <input id="photos" name="photos[]" class="form-control-file" type="file" multiple="multiple"/>
        </div>
    </div>

		<div class="form-group row">
        <label for="description" class="col-sm-4 col-form-label">Tags (seperate by comma)</label>
        <div class="col-sm-8">
            <textarea type="text" class="form-control" name="tags"></textarea>
        </div>
    </div>

    <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
    <div class="text-center">
        <button class="btn btn-outline-light text-center" type="submit" style="margin-top: 30px;">Submit</button>
    </div>
</form>
@endsection
