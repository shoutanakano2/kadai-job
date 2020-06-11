<ul>
    @foreach($jobs as $job)
        <li>

            <div>
                <p>{!! ($job->content) !!}</p>
            </div>
            <div>
                <p>{!! ($job->status) !!}</p>
            </div>
            <div>
                @if(Auth::id()==$job->user_id)
                    {!! Form::open(['route'=>['jobs.destroy',$job->id],'method'=>'delete']) !!}
                        {!! Form::submit('Delete') !!}
                    {!! Form::close() !!}
                @endif
                @if(Auth::id()==$job->user_id)
                    {!! link_to_route('jobs.edit', '編集', ['id' => $job->id]) !!}
                @endif
                
            </div>
        </li>
    @endforeach
</ul>