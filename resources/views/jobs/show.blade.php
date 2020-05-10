@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>id = {{ $job->id }} のJob詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $job->id }}</td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $job->content }}</td>
        </tr>
    </table>
    {!! link_to_route('jobs.edit', 'このJobを編集', ['id' => $job->id], ['class' => 'btn btn-light']) !!}
    {!! Form::model($job, ['route' => ['jobs.destroy', $job->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection