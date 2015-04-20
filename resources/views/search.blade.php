@extends('layouts.master')

@section('content')
    {{--{{var_dump($criteria)}}--}}
    @if($criteria === 'Username')
        {{--        {{var_dump($data)}}--}}
        <div class="list-group">
            @foreach($data as $name => $users)
                <h3 class="list-group-item">Users found matching "{{$name}}":</h3>
                @forelse($users as $user)
                    <a href="/profile/{{$user['name']}}" class="list-group-item list-group-item-success">
                        <strong>{!! preg_replace("/$name/i", "<span style='text-decoration: underline;'>$0</span>", $user['name'])!!}</strong>
                        registered {{$user['created_at']}}
                    </a>
                @empty
                    <div class="list-group-item list-group-item-danger"><strong>Sorry! </strong>No users found matching "{{$name}}"!</div>
                @endforelse
            @endforeach
        </div>
    @else
        {{var_dump($data)}}
    @endif
    {{--{{var_dump($data)}}--}}
@endsection