<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $workflowClose->id !!}</p>
</div>

<!-- Days Field -->
<div class="form-group">
    {!! Form::label('days', 'Days:') !!}
    <p>{!! $workflowClose->days !!}</p>
</div>

<!-- Condition Field -->
<div class="form-group">
    {!! Form::label('condition', 'Condition:') !!}
    <p>{!! $workflowClose->condition !!}</p>
</div>

<!-- Send Email Field -->
<div class="form-group">
    {!! Form::label('send_email', 'Send Email:') !!}
    <p>{!! $workflowClose->send_email !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $workflowClose->status !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $workflowClose->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $workflowClose->updated_at !!}</p>
</div>

