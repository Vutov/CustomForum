@if(Auth::user())
    @if(Auth::user()->id == $user_id)
        <span class="col-md-10">{{$title}} </span>
            {!! Form::open(['method' => 'DELETE' ,'url' => [$controller.'/'.$id], 'style' => 'margin:0;']) !!}
            <a href="{{$controller}}/{{$id}}/edit" class="btn btn-default">Edit</a>
            {!! Form::submit('Delete', ['class' => 'btn btn-default']) !!}
            {!! Form::close() !!}
    @endif
@else
    {{$title}}
@endif