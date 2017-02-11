<!-- Contractname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contractname', 'Contractname:') !!}
    {!! Form::text('contractname', null, ['class' => 'form-control']) !!}
</div>

<!-- Contracttype Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contracttype_id', 'Contracttype Id:') !!}
    {!! Form::number('contracttype_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Relation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('relation_id', 'Relation Id:') !!}
    {!! Form::number('relation_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Relationcontact Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('relationcontact_id', 'Relationcontact Id:') !!}
    {!! Form::number('relationcontact_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Slaplan Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slaplan_id', 'Slaplan Id:') !!}
    {!! Form::number('slaplan_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Contract Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contract_start_date', 'Contract Start Date:') !!}
    {!! Form::date('contract_start_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Contract End Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contract_end_date', 'Contract End Date:') !!}
    {!! Form::date('contract_end_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('relations.relationContracts.index') !!}" class="btn btn-default">Cancel</a>
</div>
