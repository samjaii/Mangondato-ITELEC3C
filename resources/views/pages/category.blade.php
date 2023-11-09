@extends('layouts.app')

@section('content')

<table class="table table-striped">
    <thead class="table-dark text-dark">
        <tr>
            <th><h1> Category details for {{ $item->name }} </h1></th>
            <th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{ $item->id }}</th>
        </tr>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">{{ $item->name }}</th>
        </tr>
        <tr>
            <th scope="col">Description</th>
            <th scope="col">{{ $item->description }}</th>
        </tr>
        <tr>
            <th scope="col">Created At</th>
            <th scope="col">{{ $item->created_at }}</th>
        </tr>
        <tr>
            <th scope="col">Last Updated</th>
            <th scope="col">{{ $item->updated_at }}</th>
        </tr>
    </tbody>
@endsection