<h2 class="panel-heading">{{$title}}</h2>
<div class="panel panel-body">{{$body}}</div>
<div class="panel panel-footer">
    <div class="panel panel-body">
        <div class="panel-group">Author: <a href="/profile/{{$author}}">{{$author}}</a>, posted on {{$time}} with <span
                    class="badge">{{$visits}} visits</span></div>
        <div>Category <a href="/search/cat/{{$category}}">{{$category}}</a></div>
        <div>
            @foreach($tags as $tag)
                <a href="/search/tag/{{$tag}}">#{{$tag}}</a>
            @endforeach</div>
    </div>
</div>

