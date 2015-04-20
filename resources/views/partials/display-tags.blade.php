<div class="panel-group">Tags:
    @foreach($tags as $tag)
        <a href="/search/tag/{{$tag}}">#{{$tag}}</a>
    @endforeach
</div>