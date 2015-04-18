<article class="panel panel-default">
    <h2 class="panel-heading">
        <a href="/forum/{{$topic['id']}}">{{$topic['title']}}</a>
    </h2>

    <div class="panel-body">
        <div class="panel-info">Category {{$topic['category']}}</div>
        <div class="panel-group">Tags: {{$topic['tags']}}</div>
        <div class="panel-group">Posted {{$topic['time']}} by <a href="/profile/{{$topic['author']}}">{{$topic['author']}}</a>.</div>
    </div>
</article>