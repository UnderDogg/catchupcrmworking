<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $teams->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $teams->name !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $teams->status !!}</p>
</div>

<!-- Team Lead Field -->
<div class="form-group">
    {!! Form::label('team_lead', 'Team Lead:') !!}
    <p>{!! $teams->team_lead !!}</p>
</div>

<!-- Assign Alert Field -->
<div class="form-group">
    {!! Form::label('assign_alert', 'Assign Alert:') !!}
    <p>{!! $teams->assign_alert !!}</p>
</div>

<!-- Admin Notes Field -->
<div class="form-group">
    {!! Form::label('admin_notes', 'Admin Notes:') !!}
    <p>{!! $teams->admin_notes !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $teams->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $teams->updated_at !!}</p>
</div>

