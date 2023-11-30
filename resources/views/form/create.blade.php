@extends('layouts.app')

@section('title')
<title> FINAL LAB ACT 2 </title>
@endsection

@section('content')

<form method="POST" action="{{ url('/submit') }}" enctype="multipart/form-data">

    @if(count($errors))
    <div class=" alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    </div>
    @endif

    <h1> Create Category </h1>
    {{ csrf_field() }}
    <div class="row my-3">
        <div class="col-md-12 my-2">
            <label> Name: </label>
            <input type="text" name="cat_name" id="#" class="form-control">
        </div>
        <div class="col-md-12 my-2">
            <label> Description: </label>
            <input type="text" name="cat_desc" id="#" class="form-control">
        </div>
        <div class="col-md-12 my-2">
            <label for="image">Image:</label>
            <input type="file" name="cat_image" id="#" class="form-control" accept="image/*">
        </div>
        <div class="col-md-12 my-4">
            <button type="submit" class="btn btn-dark w-100"> Submit </button>
        </div>
    </div>



</form>

@endsection