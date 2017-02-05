<!-- Relation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('relation_id', 'Relation Id:') !!}
    {!! Form::number('relation_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_name', 'Company Name:') !!}
    {!! Form::text('company_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Website Field -->
<div class="form-group col-sm-6">
    {!! Form::label('website', 'Website:') !!}
    {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Landing Page Field -->
<div class="form-group col-sm-6">
    {!! Form::label('landing_page', 'Landing Page:') !!}
    {!! Form::text('landing_page', null, ['class' => 'form-control']) !!}
</div>

<!-- Offline Page Field -->
<div class="form-group col-sm-6">
    {!! Form::label('offline_page', 'Offline Page:') !!}
    {!! Form::text('offline_page', null, ['class' => 'form-control']) !!}
</div>

<!-- Thank Page Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thank_page', 'Thank Page:') !!}
    {!! Form::text('thank_page', null, ['class' => 'form-control']) !!}
</div>

<!-- Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logo', 'Logo:') !!}
    {!! Form::text('logo', null, ['class' => 'form-control']) !!}
</div>

<!-- Use Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('use_logo', 'Use Logo:') !!}
    {!! Form::text('use_logo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('core.companies.index') !!}" class="btn btn-default">Cancel</a>
</div>
