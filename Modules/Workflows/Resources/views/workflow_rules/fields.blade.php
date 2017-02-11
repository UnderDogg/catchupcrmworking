<!-- Workflow Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('workflow_id', 'Workflow Id:') !!}
    {!! Form::number('workflow_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Matching Criteria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('matching_criteria', 'Matching Criteria:') !!}
    {!! Form::text('matching_criteria', null, ['class' => 'form-control']) !!}
</div>

<!-- Matching Scenario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('matching_scenario', 'Matching Scenario:') !!}
    {!! Form::text('matching_scenario', null, ['class' => 'form-control']) !!}
</div>

<!-- Matching Relation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('matching_relation', 'Matching Relation:') !!}
    {!! Form::text('matching_relation', null, ['class' => 'form-control']) !!}
</div>

<!-- Matching Value Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('matching_value', 'Matching Value:') !!}
    {!! Form::textarea('matching_value', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('workflows.workflowRules.index') !!}" class="btn btn-default">Cancel</a>
</div>
