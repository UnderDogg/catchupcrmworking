<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $workflowAction->id !!}</p>
</div>

<!-- Workflow Id Field -->
<div class="form-group">
    {!! Form::label('workflow_id', 'Workflow Id:') !!}
    <p>{!! $workflowAction->workflow_id !!}</p>
</div>

<!-- Condition Field -->
<div class="form-group">
    {!! Form::label('condition', 'Condition:') !!}
    <p>{!! $workflowAction->condition !!}</p>
</div>

<!-- Action Field -->
<div class="form-group">
    {!! Form::label('action', 'Action:') !!}
    <p>{!! $workflowAction->action !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $workflowAction->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $workflowAction->updated_at !!}</p>
</div>

