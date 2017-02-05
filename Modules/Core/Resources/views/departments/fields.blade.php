<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Departmenttype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departmenttype', 'Departmenttype:') !!}
    {!! Form::text('departmenttype', null, ['class' => 'form-control']) !!}
</div>

<!-- Slaplan Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slaplan_id', 'Slaplan Id:') !!}
    {!! Form::number('slaplan_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Manager Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('manager_id', 'Manager Id:') !!}
    {!! Form::number('manager_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Department Signature Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_signature', 'Department Signature:') !!}
    {!! Form::text('department_signature', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('core.departments.index') !!}" class="btn btn-default">Cancel</a>
</div>
