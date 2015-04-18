@if(Session::has('flash_message'))
    <div class='alert alert-success'>{{ session('flash_message') }}
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    </div>
@endif