<article class="panel panel-default">
    <h2 class="panel-heading">
        <a href="/forum/{{$topic['id']}}">{{$topic['title']}}</a>
    </h2>

    <div class="panel-body">
        @include('partials.display-category',['category' => $topic['category']])
        @include('partials.display-tags', ['tags'=>$topic['tags']])
        <div class="panel-group">Posted {{$topic['time']}} by <a
                    href="/profile/{{$topic['author']}}">{{$topic['author']}}</a>
            @include('partials.user-tag', ['admin' => $topic['admin'], 'guest' => null])
        </div>
    </div>
</article>