@extends('layouts.master')

@section('content')
    {{--{{var_dump($criteria)}}--}}
    @if($criteria === 'Username')
        {{var_dump($data)}}
        <div class="list-group">
            @forelse($data as $users)
                <h2 class="list-group-item">Found users:</h2>
                @foreach($users as $user)
                    <a href="/profile/{{$user['name']}}" class="list-group-item"><strong>{{$user['name']}}</strong>
                        registered {{$user['created_at']}}</a>
                @endforeach
        </div>
        @empty
            <div>No one found</div>
        @endforelse
    @else
        {{var_dump($data)}}
    @endif
    {{--{{var_dump($data)}}--}}
@endsection