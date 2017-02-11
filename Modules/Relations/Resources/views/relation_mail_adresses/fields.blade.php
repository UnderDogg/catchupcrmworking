<!-- Relation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('relation_id', 'Relation Id:') !!}
    {!! Form::number('relation_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Linktype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('linktype', 'Linktype:') !!}
    {!! Form::number('linktype', null, ['class' => 'form-control']) !!}
</div>

<!-- Linktype Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('linktype_id', 'Linktype Id:') !!}
    {!! Form::number('linktype_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Emailaddress Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emailaddress', 'Emailaddress:') !!}
    {!! Form::text('emailaddress', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('relations.relationMailAdresses.index') !!}" class="btn btn-default">Cancel</a>
</div>
