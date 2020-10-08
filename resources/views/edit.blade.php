@extends('layout')

@section('content')
    <div class="container">
        <h1>Edit image</h1>
        <div class="row">
            <div class="col-md-5">
                <img src="/{{$imageInView->images}}" alt="" class="img-thumbnail my-img">
                <br>
                <form action="/update/{{$imageInView->id}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-control">
                        <input type="file" name="image">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-warning">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
