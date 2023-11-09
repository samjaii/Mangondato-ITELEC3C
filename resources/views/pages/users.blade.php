@extends('layouts.app')

@section('content')

<h1> Users </h1>

<table class="table table-striped">
    <thead class="table-dark text-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at->diffForHumans() }}</td>
            <td>{{ $user->updated_at->diffForHumans() }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection