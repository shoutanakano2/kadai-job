@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>Job一覧</h1>

    @if (count($jobs) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>JOB</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobs as $job)
                <tr>
                    <td>{!! link_to_route('jobs.show',$job->id,['id'=>$job->id]) !!}</td>
                    <td>{{ $job->content }}</td>
                    <td>{{$job->status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('jobs.create','新規Jobの投稿',[],['class'=>'btn btn-primary']) !!}

@endsection