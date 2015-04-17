<div class="form-group">
    {!! Form::label('title', 'Title', ['class' => 'label label-default']) !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder'=>'Title']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', $body, ['class' => 'label label-default']) !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder'=>$bodyPlaceholder])
    !!}
</div>