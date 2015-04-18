<h2 class="panel-heading">{{$title}}</h2>
<div class="panel panel-body">{{$body}}</div>
<div class="panel panel-footer">
    <div class="panel panel-body">
        <div class="panel-group">Author: <a href="/profile/{{$author}}">{{$author}}</a>, posted on {{$time}} with <span class="badge">{{$visits}}
                visits</span></div>
        <div>Category {{$category}}</div>
        <div> Tags: {{$tags}}</div>
    </div>
</div>

