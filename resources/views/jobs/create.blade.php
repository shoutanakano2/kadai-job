@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>Job新規作成ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($job, ['route' => 'jobs.store']) !!}
        
                <div class="form-group">
                    {!! Form::label('content', 'Job:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection