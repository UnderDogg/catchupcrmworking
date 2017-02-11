<!-- Topic Field -->
<div class="form-group col-sm-6">
    {!! Form::label('topic', 'Topic:') !!}
    {!! Form::text('topic', null, ['class' => 'form-control']) !!}
</div>

<!-- Parent Topic Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parent_topic', 'Parent Topic:') !!}
    {!! Form::text('parent_topic', null, ['class' => 'form-control']) !!}
</div>

<!-- Custom Form Field -->
<div class="form-group col-sm-6">
    {!! Form::label('custom_form', 'Custom Form:') !!}
    {!! Form::number('custom_form', null, ['class' => 'form-control']) !!}
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department Id:') !!}
    {!! Form::number('department_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ticketstatus Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ticketstatus_id', 'Ticketstatus Id:') !!}
    {!! Form::number('ticketstatus_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ticketpriority Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ticketpriority_id', 'Ticketpriority Id:') !!}
    {!! Form::number('ticketpriority_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Slaplan Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slaplan_id', 'Slaplan Id:') !!}
    {!! Form::number('slaplan_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Thank Page Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thank_page', 'Thank Page:') !!}
    {!! Form::text('thank_page', null, ['class' => 'form-control']) !!}
</div>

<!-- Ticket Num Format Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ticket_num_format', 'Ticket Num Format:') !!}
    {!! Form::text('ticket_num_format', null, ['class' => 'form-control']) !!}
</div>

<!-- Auto Assign Field -->
<div class="form-group col-sm-6">
    {!! Form::label('auto_assign', 'Auto Assign:') !!}
    {!! Form::number('auto_assign', null, ['class' => 'form-control']) !!}
</div>

<!-- Internal Notes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('internal_notes', 'Internal Notes:') !!}
    {!! Form::text('internal_notes', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tickets.ticketHelpTopics.index') !!}" class="btn btn-default">Cancel</a>
</div>
