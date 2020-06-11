@extends('layouts.app')
@section('content')
    @if(Auth::check())
        {{ Auth::user()->name }}
        <div>
            @if(Auth::id()==$user->id)
                {!! Form::model($job, ['route' => 'jobs.store']) !!}
                <div class="form-group">
                    {!! Form::label('content', 'Job:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('status','ステータス:') !!}
                    {!! Form::text('status',null,['class'=>'form-control']) !!}                    
                </div>
        
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
            @endif
            @if(count($jobs) > 0)
                @include('jobs.jobs',['jobs'=>$jobs])
            @endif
        </div>
        
    @else
    <h1>Welcome to the Joblist</h1>
    {!! link_to_route('signup.get','Sign up now!') !!}
    @endif
    
@endsection