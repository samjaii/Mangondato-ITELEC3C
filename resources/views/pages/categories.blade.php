@extends('layouts.app')

@section('title')
<title> Final Lab Act 1: Categories </title>
@endsection

@section('content')
<h2 class="text-center"> Categories </h2>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $cat)
        <tr>
            <td>{{ $cat->id }}</td>
            <td><img src="{{ $cat->image }}" class="img-fluid" width="150"></td>
            <td>{{ $cat->name }}</td>
            <td>{{ $cat->description }}</td>
            <td>{{ $cat->created_at}}</td>
            <td>{{ $cat->updated_at}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection