@if(Session::has('flash_message'))
    <div class="col-md-8 col-md-offset-2">
        <div class='alert alert-success'>{{ session('flash_message') }}
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        </div>
    </div>
@endif