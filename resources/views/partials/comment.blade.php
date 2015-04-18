<article class="panel panel-primary">
    <h3 class="panel-title panel-heading">
        {{$comment['title']}}
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
