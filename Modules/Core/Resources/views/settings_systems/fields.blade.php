<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'Url:') !!}
    {!! Form::text('url', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Department Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department', 'Department:') !!}
    {!! Form::text('department', null, ['class' => 'form-control']) !!}
</div>

<!-- Page Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('page_size', 'Page Size:') !!}
    {!! Form::text('page_size', null, ['class' => 'form-control']) !!}
</div>

<!-- Log Level Field -->
<div class="form-group col-sm-6">
    {!! Form::label('log_level', 'Log Level:') !!}
    {!! Form::text('log_level', null, ['class' => 'form-control']) !!}
</div>

<!-- Purge Log Field -->
<div class="form-group col-sm-6">
    {!! Form::label('purge_log', 'Purge Log:') !!}
    {!! Form::text('purge_log', null, ['class' => 'form-control']) !!}
</div>

<!-- Api Enable Field -->
<div class="form-group col-sm-6">
    {!! Form::label('api_enable', 'Api Enable:') !!}
    {!! Form::number('api_enable', null, ['class' => 'form-control']) !!}
</div>

<!-- Api Key Mandatory Field -->
<div class="form-group col-sm-6">
    {!! Form::label('api_key_mandatory', 'Api Key Mandatory:') !!}
    {!! Form::number('api_key_mandatory', null, ['class' => 'form-control']) !!}
</div>

<!-- Api Key Field -->
<div class="form-group col-sm-6">
    {!! Form::label('api_key', 'Api Key:') !!}
    {!! Form::text('api_key', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Format Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_format', 'Name Format:') !!}
    {!! Form::text('name_format', null, ['class' => 'form-control']) !!}
</div>

<!-- Time Farmat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_farmat', 'Time Farmat:') !!}
    {!! Form::number('time_farmat', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Format Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_format', 'Date Format:') !!}
    {!! Form::number('date_format', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Time Format Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_time_format', 'Date Time Format:') !!}
    {!! Form::number('date_time_format', null, ['class' => 'form-control']) !!}
</div>

<!-- Day Date Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('day_date_time', 'Day Date Time:') !!}
    {!! Form::text('day_date_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Time Zone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_zone', 'Time Zone:') !!}
    {!! Form::number('time_zone', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-6">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::text('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Version Field -->
<div class="form-group col-sm-6">
    {!! Form::label('version', 'Version:') !!}
    {!! Form::text('version', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('core.settingsSystems.index') !!}" class="btn btn-default">Cancel</a>
</div>
