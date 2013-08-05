@extends('projLayout')

@section('home')
    <h1>Students</h1>
    <p>{{ link_to_route('user.index', 'View all Students') }}</p>
    <p>{{ link_to_route('user.create', 'Add a Student') }}</p>
@stop