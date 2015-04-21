@if(Session::has('flash_message'))
    <div class='alert alert-success'><span class="glyphicon glyphicon-ok-sign" style="margin-right: 4px" = aria-hidden="true"></span>{{ session('flash_message') }}
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    </div>
@endif
@if(Session::has('flash_message_error'))
    <div class='alert alert-danger'>
        <strong>Sorry!</strong> There were some problems with your input.<br><br>
        {{ session('flash_message_error') }}</div>
@endif
@if(Session::has('flash_message_forbidden'))
    <div class='alert alert-danger'>
        <span class="glyphicon glyphicon-remove-sign" style="margin-right: 4px" aria-hidden="true"></span>
        {{ session('flash_message_forbidden') }}
    </div>
@endif