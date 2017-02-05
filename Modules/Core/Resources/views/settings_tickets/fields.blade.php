<!-- Num Format Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_format', 'Num Format:') !!}
    {!! Form::text('num_format', null, ['class' => 'form-control']) !!}
</div>

<!-- Num Sequence Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_sequence', 'Num Sequence:') !!}
    {!! Form::text('num_sequence', null, ['class' => 'form-control']) !!}
</div>

<!-- Priority Field -->
<div class="form-group col-sm-6">
    {!! Form::label('priority', 'Priority:') !!}
    {!! Form::text('priority', null, ['class' => 'form-control']) !!}
</div>

<!-- Sla Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sla', 'Sla:') !!}
    {!! Form::text('sla', null, ['class' => 'form-control']) !!}
</div>

<!-- Help Topic Field -->
<div class="form-group col-sm-6">
    {!! Form::label('help_topic', 'Help Topic:') !!}
    {!! Form::text('help_topic', null, ['class' => 'form-control']) !!}
</div>

<!-- Max Open Ticket Field -->
<div class="form-group col-sm-6">
    {!! Form::label('max_open_ticket', 'Max Open Ticket:') !!}
    {!! Form::text('max_open_ticket', null, ['class' => 'form-control']) !!}
</div>

<!-- Collision Avoid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('collision_avoid', 'Collision Avoid:') !!}
    {!! Form::text('collision_avoid', null, ['class' => 'form-control']) !!}
</div>

<!-- Lock Ticket Frequency Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lock_ticket_frequency', 'Lock Ticket Frequency:') !!}
    {!! Form::text('lock_ticket_frequency', null, ['class' => 'form-control']) !!}
</div>

<!-- Captcha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('captcha', 'Captcha:') !!}
    {!! Form::text('captcha', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('core.settingsTickets.index') !!}" class="btn btn-default">Cancel</a>
</div>
