@if(Auth::user())
    @if(Auth::user()->id == $user_id)
        <span class="col-md-11">{{$title}} </span>
        <a href="{{$controller}}/{{$id}}/edit" class="btn btn-default">Edit</a>
    @endif
@else
    {{$title}}
@endif