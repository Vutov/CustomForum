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
                        <strong>{!! preg_replace("/$name/i", "<span style='text-decoration: underline;'>$0</span>",
                            $user['name'])!!}</strong>
                        registered {{$user['created_at']}}
                    </a>
                @empty
                    <div class="list-group-item list-group-item-danger"><strong>Sorry! </strong>No users found matching
                        "{{$name}}"!
                    </div>
                @endforelse
            @endforeach
        </div>
    @else
        {{--{{var_dump($data)}}--}}
        <div class="list-group">
            @foreach($data as $query => $topics)
                <section>
                    <h3 class="panel panel-heading">{{$criteria}}s matching "{{$query}}":</h3>
                @forelse($topics as $topic)
                    <article class="panel">
                    <h4 class="panel-heading panel-primary">
                        <a href="/forum/{{$topic['id']}}">
                            <strong>{!! preg_replace("/$query/i", "<span style='text-decoration: underline;'>$0</span>",
                                $topic['title'])!!}</strong>
                        </a>
                    </h4>
                        <div class="panel-body">
                            {{$topic['body']}}
                        </div>
                    </article>
                    {{var_dump($topic)}}
                    @if($criteria === 'Topic title')

                    @endif
                @empty
                    not found
                @endforelse
                </section>
            @endforeach
        </div>
    @endif
    {{--{{var_dump($data)}}--}}
@endsection