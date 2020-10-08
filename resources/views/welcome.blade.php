@extends('layout')

@section('content')

    <h1 class="text-center">My gallery</h1>
    <br>
    <div class="container">
        <div class="row">
            @foreach($imagesInView as $image)
            <div class="col-md-3">
                <div class="images">
                    <img src="{{$image->images}}" alt="..." class="img-thumbnail">
                </div>
                <a href="/show/{{$image->id}}" class="btn btn-success gall-btn">Show</a>
                <a href="/edit/{{$image->id}}" class="btn btn-warning gall-btn">Edit</a>
                <a href="/delete/{{$image->id}}" class="btn btn-danger gall-btn" onclick="return confirm('Are you sure ?')">Delete</a>
            </div>
            @endforeach



        </div>
    </div>
@endsection
