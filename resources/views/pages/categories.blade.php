@extends('layouts.app')

@section('title')
<title> Lab Act 1: Categories </title>
@endsection

@section('content')
@if(session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

<h1> Categories </h1>

<div class="my-3 justify-content-end d-flex">
    <a href="/create" class="btn btn-dark" type="button">CREATE NEW RECORD</a>
</div>

<table class="table table-striped">
    <thead class="table-dark text-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $cat)
        <form method="POST" action="{{ url('delete-category/'.$cat->id) }}">
            @method("DELETE")
            @csrf

            <tr>
                <td>{{ $cat->id }}</td>
                <td>{{ $cat->name }}</td>
                <td>{{ $cat->description }}</td>
                <td>{{ $cat->created_at->diffForHumans() }}</td>
                <td>{{ $cat->updated_at->diffForHumans() }}</td>
                <td><a href="/categories/{{ $cat->id }}" class="btn btn-success" type="button">VIEW</a>
                    <a href="/categories/edit/{{ $cat->id }}" class="btn btn-primary" type="button">EDIT</a>
                    <button class="btn btn-danger" type="submit">DELETE</a>
                </td>
            </tr>
            @endforeach
        </form>

    </tbody>
</table>

{!! $categories->links() !!}

@endsection