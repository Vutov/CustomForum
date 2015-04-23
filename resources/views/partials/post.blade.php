<h2 class="panel-heading">
    @include('partials.edit-title', ['user_id' => $user_id,'controller' => '/forum',
    'title' => $title,'id' => $id,])
</h2>
<div class="panel panel-body">{{$body}}</div>
<div class="panel panel-footer">
    <div class="panel panel-body">
        <div class="panel-group">
            <span>Author: </span>
            <a href="/profile/{{$author}}">{{$author}}</a>
            @include('partials.user-tag', ['admin' => $admin, 'guest' => null])
            <span>, posted on {{$time}} with </span>
            <span class="badge">{{$visits}} visits</span></div>
        @include('partials.display-category',['category' => $category])
        @include('partials.display-tags',['tags' => $tags])
    </div>
</div>

