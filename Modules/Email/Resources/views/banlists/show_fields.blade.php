<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $banlist->id !!}</p>
</div>

<!-- Ban Status Field -->
<div class="form-group">
    {!! Form::label('ban_status', 'Ban Status:') !!}
    <p>{!! $banlist->ban_status !!}</p>
</div>

<!-- Email Address Field -->
<div class="form-group">
    {!! Form::label('email_address', 'Email Address:') !!}
    <p>{!! $banlist->email_address !!}</p>
</div>

<!-- Internal Notes Field -->
<div class="form-group">
    {!! Form::label('internal_notes', 'Internal Notes:') !!}
    <p>{!! $banlist->internal_notes !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $banlist->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $banlist->updated_at !!}</p>
</div>

