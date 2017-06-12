@extends('layouts.app')
@section('content')
    <h1>Submit you picture</h1>
    <hr>
    <div class="col-sm-8">
        <form method="POST" action="/pictures" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text"
                       class="form-control"
                       id="title"
                       name="title"
                       placeholder="Title">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text"
                       class="form-control"
                       id="description"
                       name="description"
                       placeholder="Description">
            </div>
            <div class="form-group">
                <label for="picture-input">Picture input</label>
                <input type="file"
                       name="picture"
                       id="picture-input">
            </div>
            <button type="submit" class="btn btn-default">Submit Picture</button>
        </form>
    </div>
@endsection