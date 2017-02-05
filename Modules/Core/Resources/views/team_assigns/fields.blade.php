<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Shortname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shortname', 'Shortname:') !!}
    {!! Form::text('shortname', null, ['class' => 'form-control']) !!}
</div>

<!-- Relationtype Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('relationtype_id', 'Relationtype Id:') !!}
    {!! Form::number('relationtype_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Language Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('language_id', 'Language Id:') !!}
    {!! Form::number('language_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Slaplanid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slaplanid', 'Slaplanid:') !!}
    {!! Form::number('slaplanid', null, ['class' => 'form-control']) !!}
</div>

<!-- Slaexpirytimeline Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slaexpirytimeline', 'Slaexpirytimeline:') !!}
    {!! Form::number('slaexpirytimeline', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('core.teamAssigns.index') !!}" class="btn btn-default">Cancel</a>
</div>
