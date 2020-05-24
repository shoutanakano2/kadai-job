@extends('layouts.app')
@section('content')
    @if(Auth::check())
        {{ Auth::user()->name }}
    @else
    <h1>Welcome to the Joblist</h1>
    {!! link_to_route('signup.get','Sign up now!)
    @endif
    
@endsection