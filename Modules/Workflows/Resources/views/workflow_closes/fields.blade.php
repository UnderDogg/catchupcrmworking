<!-- Days Field -->
<div class="form-group col-sm-6">
    {!! Form::label('days', 'Days:') !!}
    {!! Form::number('days', null, ['class' => 'form-control']) !!}
</div>

<!-- Condition Field -->
<div class="form-group col-sm-6">
    {!! Form::label('condition', 'Condition:') !!}
    {!! Form::number('condition', null, ['class' => 'form-control']) !!}
</div>

<!-- Send Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('send_email', 'Send Email:') !!}
    {!! Form::number('send_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::number('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('workflows.workflowCloses.index') !!}" class="btn btn-default">Cancel</a>
</div>
