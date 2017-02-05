<!-- Email Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_address', 'Email Address:') !!}
    {!! Form::text('email_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_name', 'Email Name:') !!}
    {!! Form::text('email_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department Id:') !!}
    {!! Form::number('department_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Priority Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('priority_id', 'Priority Id:') !!}
    {!! Form::number('priority_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Helptopic Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('helptopic_id', 'Helptopic Id:') !!}
    {!! Form::number('helptopic_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Username Field -->
<div class="form-group col-sm-6">
    {!! Form::label('username', 'Username:') !!}
    {!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Mailbox Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mailbox_type', 'Mailbox Type:') !!}
    {!! Form::text('mailbox_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Fetchtype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fetchtype', 'Fetchtype:') !!}
    {!! Form::text('fetchtype', null, ['class' => 'form-control']) !!}
</div>

<!-- Fetching Host Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fetching_host', 'Fetching Host:') !!}
    {!! Form::text('fetching_host', null, ['class' => 'form-control']) !!}
</div>

<!-- Fetching Port Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fetching_port', 'Fetching Port:') !!}
    {!! Form::text('fetching_port', null, ['class' => 'form-control']) !!}
</div>

<!-- Fetching Protocol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fetching_protocol', 'Fetching Protocol:') !!}
    {!! Form::text('fetching_protocol', null, ['class' => 'form-control']) !!}
</div>

<!-- Fetching Encryption Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fetching_encryption', 'Fetching Encryption:') !!}
    {!! Form::text('fetching_encryption', null, ['class' => 'form-control']) !!}
</div>

<!-- Imap Config Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imap_config', 'Imap Config:') !!}
    {!! Form::text('imap_config', null, ['class' => 'form-control']) !!}
</div>

<!-- Sending Host Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sending_host', 'Sending Host:') !!}
    {!! Form::text('sending_host', null, ['class' => 'form-control']) !!}
</div>

<!-- Sending Port Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sending_port', 'Sending Port:') !!}
    {!! Form::text('sending_port', null, ['class' => 'form-control']) !!}
</div>

<!-- Sending Protocol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sending_protocol', 'Sending Protocol:') !!}
    {!! Form::text('sending_protocol', null, ['class' => 'form-control']) !!}
</div>

<!-- Sending Encryption Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sending_encryption', 'Sending Encryption:') !!}
    {!! Form::text('sending_encryption', null, ['class' => 'form-control']) !!}
</div>

<!-- Smtp Validate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smtp_validate', 'Smtp Validate:') !!}
    {!! Form::text('smtp_validate', null, ['class' => 'form-control']) !!}
</div>

<!-- Smtp Authentication Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smtp_authentication', 'Smtp Authentication:') !!}
    {!! Form::text('smtp_authentication', null, ['class' => 'form-control']) !!}
</div>

<!-- Tickettypeid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tickettypeid', 'Tickettypeid:') !!}
    {!! Form::number('tickettypeid', null, ['class' => 'form-control']) !!}
</div>

<!-- Priorityid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('priorityid', 'Priorityid:') !!}
    {!! Form::number('priorityid', null, ['class' => 'form-control']) !!}
</div>

<!-- Ticketstatusid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ticketstatusid', 'Ticketstatusid:') !!}
    {!! Form::number('ticketstatusid', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('email.mailboxes.index') !!}" class="btn btn-default">Cancel</a>
</div>
