@extends('layouts.app')

@section('content')
<h1>Sign up</h1>
{!! Form::open(['route'=>'signup.post']) !!}
    <div>
        {!! Form::label('name','Name') !!}
        {!! Form::text('name',old('name') !!}
    </div>
    <div>
        {!! Form::label('email','Email') !!}
        {!! Form::email('email',old('email') !!}
    </div>
    <div>
        {!! Form::label('password','Password') !!}
        {!! Form::password('password') !!}
    </div>
    <div>
        {!! Form::label('password_confirmation','Confirmation') !!}
        {!! Form::password('password_confirmation') !!}
    </div>
    {!! Form::submit('Sign up') !!}
{!! Form::close() !!}

@endsection('content')