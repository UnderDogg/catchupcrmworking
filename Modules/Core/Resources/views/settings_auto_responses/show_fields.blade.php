<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $settingsAutoResponse->id !!}</p>
</div>

<!-- New Ticket Field -->
<div class="form-group">
    {!! Form::label('new_ticket', 'New Ticket:') !!}
    <p>{!! $settingsAutoResponse->new_ticket !!}</p>
</div>

<!-- Agent New Ticket Field -->
<div class="form-group">
    {!! Form::label('agent_new_ticket', 'Agent New Ticket:') !!}
    <p>{!! $settingsAutoResponse->agent_new_ticket !!}</p>
</div>

<!-- Submitter Field -->
<div class="form-group">
    {!! Form::label('submitter', 'Submitter:') !!}
    <p>{!! $settingsAutoResponse->submitter !!}</p>
</div>

<!-- Participants Field -->
<div class="form-group">
    {!! Form::label('participants', 'Participants:') !!}
    <p>{!! $settingsAutoResponse->participants !!}</p>
</div>

<!-- Overlimit Field -->
<div class="form-group">
    {!! Form::label('overlimit', 'Overlimit:') !!}
    <p>{!! $settingsAutoResponse->overlimit !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $settingsAutoResponse->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $settingsAutoResponse->updated_at !!}</p>
</div>

