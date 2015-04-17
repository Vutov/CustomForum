<article class="panel panel-primary">
    <h2 class="panel-heading">{{$title}}</h2>
    <div class="panel panel-body">{{$body}}</div>
    <div class="panel panel-footer">
        <div class="panel panel-body">
            <div class="panel-group">Author: {{$author}}, posted on {{$time}} with <span class="badge">{{$visits}} visits</span></div>
            <div>Category {{$category}}</div>
            <div> Tags: {{$tags}}</div>
        </div>
        {{--Comments--}}
        @foreach($comments as $comment)
            @include('partials/comment', ['comment' => $comment])
        @endforeach
    </div>
</article>
