<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company', 'Company:') !!}
    {!! Form::text('company', null, ['class' => 'form-control']) !!}
</div>

<!-- Num Of Employees Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_of_employees', 'Num Of Employees:') !!}
    {!! Form::number('num_of_employees', null, ['class' => 'form-control']) !!}
</div>

<!-- Website Field -->
<div class="form-group col-sm-6">
    {!! Form::label('website', 'Website:') !!}
    {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

<!-- Annual Revenue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('annual_revenue', 'Annual Revenue:') !!}
    {!! Form::number('annual_revenue', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Mobile Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mobile_phone', 'Mobile Phone:') !!}
    {!! Form::text('mobile_phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax', 'Fax:') !!}
    {!! Form::text('fax', null, ['class' => 'form-control']) !!}
</div>

<!-- Birthdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('birthdate', 'Birthdate:') !!}
    {!! Form::date('birthdate', null, ['class' => 'form-control']) !!}
</div>

<!-- Street Field -->
<div class="form-group col-sm-6">
    {!! Form::label('street', 'Street:') !!}
    {!! Form::text('street', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<!-- State Field -->
<div class="form-group col-sm-6">
    {!! Form::label('state', 'State:') !!}
    {!! Form::text('state', null, ['class' => 'form-control']) !!}
</div>

<!-- Zip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zip', 'Zip:') !!}
    {!! Form::text('zip', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>

<!-- Salutation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salutation_id', 'Salutation Id:') !!}
    {!! Form::number('salutation_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Lead Source Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lead_source_id', 'Lead Source Id:') !!}
    {!! Form::number('lead_source_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_id', 'Status Id:') !!}
    {!! Form::number('status_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Industry Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('industry_id', 'Industry Id:') !!}
    {!! Form::number('industry_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Rating Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rating_id', 'Rating Id:') !!}
    {!! Form::number('rating_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Converted At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('converted_at', 'Converted At:') !!}
    {!! Form::date('converted_at', null, ['class' => 'form-control']) !!}
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
    <a href="{!! route('leads.leads.index') !!}" class="btn btn-default">Cancel</a>
</div>
