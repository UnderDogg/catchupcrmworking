<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Team Lead Field -->
<div class="form-group col-sm-6">
    {!! Form::label('team_lead', 'Team Lead:') !!}
    {!! Form::number('team_lead', null, ['class' => 'form-control']) !!}
</div>

<!-- Admin Notes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admin_notes', 'Admin Notes:') !!}
    {!! Form::text('admin_notes', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('employees.teams.index') !!}" class="btn btn-default">Cancel</a>
</div>
