<!-- Template Field -->
<div class="form-group col-sm-6">
    {!! Form::label('template', 'Template:') !!}
    {!! Form::text('template', null, ['class' => 'form-control']) !!}
</div>

<!-- Sys Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sys_email', 'Sys Email:') !!}
    {!! Form::text('sys_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Alert Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alert_email', 'Alert Email:') !!}
    {!! Form::text('alert_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Admin Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admin_email', 'Admin Email:') !!}
    {!! Form::text('admin_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Mta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mta', 'Mta:') !!}
    {!! Form::text('mta', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('core.settingsEmails.index') !!}" class="btn btn-default">Cancel</a>
</div>
