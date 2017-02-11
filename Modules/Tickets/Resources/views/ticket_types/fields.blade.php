<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Displayicon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('displayicon', 'Displayicon:') !!}
    {!! Form::text('displayicon', null, ['class' => 'form-control']) !!}
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department Id:') !!}
    {!! Form::number('department_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Displayorder Field -->
<div class="form-group col-sm-6">
    {!! Form::label('displayorder', 'Displayorder:') !!}
    {!! Form::number('displayorder', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tickets.ticketTypes.index') !!}" class="btn btn-default">Cancel</a>
</div>
