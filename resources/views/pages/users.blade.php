@extends('layouts.app')

@section('title')
<title> Lab Act 1: Users </title>
@endsection

@section('content')
<h2 class="text-center"> Users </h2>
<table class="table table-striped table-hover">
    <thead>
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
            <td>{{ $user->created_at}}</td>
            <td>{{ $user->updated_at}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection