@extends('layouts.app')

@section('title')
<title> Lab Act 1: Category - {{ $item->name }} </title>
@endsection

@section('content')
<h3> Displaying information for category "{{ $item->name }}" </h3>
<hr>
<p> Name: {{ $item->name }} </p>
<p> Description: {{ $item->description }} </p>
<p> Created At: {{ $item->created_at }} </p>
<p> Updated At: {{ $item->updated_at }} </p>
@endsection