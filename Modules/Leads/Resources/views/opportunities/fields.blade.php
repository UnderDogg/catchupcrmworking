<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Close Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('close_date', 'Close Date:') !!}
    {!! Form::date('close_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Expected Revenue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expected_revenue', 'Expected Revenue:') !!}
    {!! Form::number('expected_revenue', null, ['class' => 'form-control']) !!}
</div>

<!-- Next Step Field -->
<div class="form-group col-sm-6">
    {!! Form::label('next_step', 'Next Step:') !!}
    {!! Form::text('next_step', null, ['class' => 'form-control']) !!}
</div>

<!-- Probability Field -->
<div class="form-group col-sm-6">
    {!! Form::label('probability', 'Probability:') !!}
    {!! Form::number('probability', null, ['class' => 'form-control']) !!}
</div>

<!-- Competitors Field -->
<div class="form-group col-sm-6">
    {!! Form::label('competitors', 'Competitors:') !!}
    {!! Form::text('competitors', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Lead Source Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lead_source_id', 'Lead Source Id:') !!}
    {!! Form::number('lead_source_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Stage Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stage_id', 'Stage Id:') !!}
    {!! Form::number('stage_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_id', 'Type Id:') !!}
    {!! Form::number('type_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Contact Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contact_id', 'Contact Id:') !!}
    {!! Form::number('contact_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Owner Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('owner_id', 'Owner Id:') !!}
    {!! Form::number('owner_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Adder Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adder_id', 'Adder Id:') !!}
    {!! Form::number('adder_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Modifier Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modifier_id', 'Modifier Id:') !!}
    {!! Form::number('modifier_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('leads.opportunities.index') !!}" class="btn btn-default">Cancel</a>
</div>
