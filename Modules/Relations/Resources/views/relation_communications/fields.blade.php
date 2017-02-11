<!-- Relation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('relation_id', 'Relation Id:') !!}
    {!! Form::number('relation_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Communicationtype Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('communicationtype_id', 'Communicationtype Id:') !!}
    {!! Form::number('communicationtype_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Phonenumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phonenumber', 'Phonenumber:') !!}
    {!! Form::text('phonenumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Mobilenumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mobilenumber', 'Mobilenumber:') !!}
    {!! Form::text('mobilenumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Faxnumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('faxnumber', 'Faxnumber:') !!}
    {!! Form::text('faxnumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Website Field -->
<div class="form-group col-sm-6">
    {!! Form::label('website', 'Website:') !!}
    {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('relations.relationCommunications.index') !!}" class="btn btn-default">Cancel</a>
</div>
