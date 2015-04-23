@extends('layouts.master')
@section('title')
    <title>Search</title>
@endsection
@section('content')

    @if($criteria === 'Username')
        <div class="list-group">
            @foreach($data as $name => $users)
                <h3 class="list-group-item">Users found matching "{{$name}}":</h3>
                @forelse($users as $user)
                    <a href="/profile/{{$user['name']}}" class="list-group-item list-group-item-success">
                        <strong>
                            {!! preg_replace("/$name/i", "<span style='text-decoration: underline;'>$0</span>",$user['name'])!!}</strong>
                        @include('partials.user-tag', ['admin' => $user['admin'], 'guest' => null])
                        registered {{$user['created_at']}}
                    </a>
                @empty
                    <div class="list-group-item list-group-item-danger">
                        <strong>Sorry! </strong>No users found matching "{{$name}}"!
                    </div>
                @endforelse
            @endforeach
        </div>
    @elseif($criteria === 'cat' || $criteria === 'tag')
        @if($criteria === 'cat')
            <h3 class="panel panel-heading">Questions in category "{{$query}}":</h3>
        @else
            {{--$criteria === 'tag'--}}
            <h3 class="panel panel-heading">Questions with tag "{{$query}}":</h3>
        @endif
        @foreach($data as $topic)
            <article class="panel panel-primary">
                <h3 class="panel-title panel-heading">
                    {{$topic['title']}}
                </h3>

                <div class="panel panel-body">{{$topic['body']}}</div>
                <div class="panel-footer">
                    Created: {{$topic['created_at']}}
                    @include('partials.display-category',['category' => $topic['category']])
                    @include('partials.display-tags', ['tags'=>$topic['tags']])

                </div>
            </article>
        @endforeach
    @else
        <div class="list-group">
            @foreach($data as $query => $topics)
                <section class="panel">
                    <h3 class="panel panel-heading">{{$criteria}}s matching "{{$query}}":</h3>
                    @forelse($topics as $topic)
                        <article class="panel">
                            <h4 class="panel-heading panel-primary">
                                @if($criteria === 'Comment title' || $criteria === 'Comment answer')
                                    <a href="/forum/{{$topic['topic_id']}}">
                                        @if($criteria === 'Comment title')
                                            <strong>{!! preg_replace("/$query/i", "<span
                                                        style='text-decoration: underline;'>$0</span>",$topic['title'])!!}
                                            </strong>
                                        @else
                                            <strong>{{$topic['title']}}</strong>
                                        @endif
                                    </a>
                                @else
                                    {{--($criteria == 'Comment title' && $criteria == 'Comment question')--}}
                                    <a href="/forum/{{$topic['id']}}">
                                        @if($criteria === 'Topic title')
                                            <strong>{!! preg_replace("/$query/i", "<span
                                                        style='text-decoration: underline;'>$0</span>",$topic['title'])!!}
                                            </strong>
                                        @else
                                            <strong>{{$topic['title']}}</strong>
                                        @endif
                                    </a>
                                @endif
                            </h4>

                            <div class="panel-body">
                                @if($criteria === 'Topic title' || $criteria === 'Comment title')
                                    {{$topic['body']}}
                                @else
                                    {!! preg_replace("/$query/i", "<span
                                            style='text-decoration: underline;'>$0</span>",$topic['body'])!!}
                                @endif
                            </div>
                            @if($criteria === 'Topic tag' || $criteria === 'Topic categorie')
                                <div class="panel-footer">
                                    <div>Categories:
                                        <a href="/search/cat/{{$topic['category']}}">
                                            @if($criteria === 'Topic categorie')
                                                {!! preg_replace("/$query/i", "<span
                                                        style='text-decoration: underline;'>$0</span>",
                                                $topic['category'])!!}
                                            @else
                                                {{$topic['category']}}
                                            @endif
                                        </a>
                                    </div>
                                    <div>Tags:
                                        @if($criteria === 'Topic tag')
                                            {!! preg_replace("/$query/i", "<span
                                                    style='text-decoration: underline;'>$0</span>", $topic['tags'])!!}
                                        @else
                                            {{$topic['tags']}}
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </article>
                    @empty
                        <div class="panel panel-body panel-danger">
                            <strong class="text-danger">Sorry!</strong> Nothing matches your search!
                        </div>
                    @endforelse
                </section>
            @endforeach
        </div>
    @endif
    {{--{{var_dump($data)}}--}}
@endsection