<article class="panel panel-primary">
    <h3 class="panel-heading">
        @include('partials.edit-title', ['user_id' => $comment['user_id'],'controller' => '/reply',
    'title' => $comment['title'],'id' => $comment['id']])
    </h3>

    <div class="panel panel-body">{{$comment['body']}}</div>
    <div class="panel-footer">
        {{$comment['time']}} by
        @if($comment['guest'])
            {{$comment['user_name']}} (Guest)
            @if($comment['user_email'])
                <div class="panel panel-collapse">
                    {{$comment['user_email']}}
                </div>
            @endif
        @else
            <a href="/profile/{{$comment['user_name']}}">{{$comment['user_name']}}</a>
        @endif
    </div>
</article>
