@extends('layouts.app')

@section('content')
<h1>Log in</h1>
{!! Form::open(['route'=>'login.post']) !!}
    <div>
        {!! Form::label('email','Email') !!}
        {!! Form::email('email',old('email') !!}
    </div>
    <div>
        {!! Form::label('password','Password') !!}
        {!! Form::password('password') !!}
    </div>
    {!! Form::submit('Log in') !!}
{!! Form::close() !!}
<p>New user?{!! link_to_route('signup.get','Sign up now!') !!}</p>
@endsection('content')