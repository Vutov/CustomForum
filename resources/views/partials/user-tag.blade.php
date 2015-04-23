@if($admin)
    <span class="label label-danger">Admin</span>

@elseif($guest)
    <div class="label label-default">Guest</div>
@else
    <div class="label label-primary">User</div>

@endif