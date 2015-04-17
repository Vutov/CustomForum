<article class="panel panel-default">
    <h2 class="panel-heading">
        <a href="/forum/show/{{$topic['id']}}">{{$topic['title']}}</a>
    </h2>

    <div class="panel-body">
        <div class="panel-info">Category {{$topic['category']}}</div>
        <div class="panel-group">Tags: {{$topic['tags']}}</div>
        <div class="panel-group">Posted {{$topic['time']}} by {{$topic['author']}}.</div>
    </div>
</article>