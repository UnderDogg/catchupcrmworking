<!-- Email Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_address', 'Email Address:') !!}
    {!! Form::text('email_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Internal Notes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('internal_notes', 'Internal Notes:') !!}
    {!! Form::text('internal_notes', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('email.banlists.index') !!}" class="btn btn-default">Cancel</a>
</div>
