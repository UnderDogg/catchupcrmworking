<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $workflowRules->id !!}</p>
</div>

<!-- Workflow Id Field -->
<div class="form-group">
    {!! Form::label('workflow_id', 'Workflow Id:') !!}
    <p>{!! $workflowRules->workflow_id !!}</p>
</div>

<!-- Matching Criteria Field -->
<div class="form-group">
    {!! Form::label('matching_criteria', 'Matching Criteria:') !!}
    <p>{!! $workflowRules->matching_criteria !!}</p>
</div>

<!-- Matching Scenario Field -->
<div class="form-group">
    {!! Form::label('matching_scenario', 'Matching Scenario:') !!}
    <p>{!! $workflowRules->matching_scenario !!}</p>
</div>

<!-- Matching Relation Field -->
<div class="form-group">
    {!! Form::label('matching_relation', 'Matching Relation:') !!}
    <p>{!! $workflowRules->matching_relation !!}</p>
</div>

<!-- Matching Value Field -->
<div class="form-group">
    {!! Form::label('matching_value', 'Matching Value:') !!}
    <p>{!! $workflowRules->matching_value !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $workflowRules->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $workflowRules->updated_at !!}</p>
</div>

