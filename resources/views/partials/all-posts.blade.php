<article class="panel panel-default">
    <h2 class="panel-heading">
        <a href="/forum/{{$topic['id']}}">{{$topic['title']}}</a>
    </h2>

    <div class="panel-body">
        <div class="panel-info">Category <a href="/search/cat/{{$topic['category']}}">{{$topic['category']}}</a></div>
        <div class="panel-group">Tags:
            @foreach($topic['tags'] as $tag)
                <a href="/search/tag/{{$tag}}">#{{$tag}}</a>
            @endforeach
        </div>
        <div class="panel-group">Posted {{$topic['time']}} by <a
                    href="/profile/{{$topic['author']}}">{{$topic['author']}}</a>.
        </div>
    </div>
</article>