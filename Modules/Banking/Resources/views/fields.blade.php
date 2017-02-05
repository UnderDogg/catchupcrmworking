<!-- Company Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_id', 'Company Id:') !!}
    {!! Form::number('company_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Relation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('relation_id', 'Relation Id:') !!}
    {!! Form::number('relation_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Invoice Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoice_id', 'Invoice Id:') !!}
    {!! Form::number('invoice_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Contact Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contact_id', 'Contact Id:') !!}
    {!! Form::number('contact_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Invitation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invitation_id', 'Invitation Id:') !!}
    {!! Form::number('invitation_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Acc Gateway Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('acc_gateway_id', 'Acc Gateway Id:') !!}
    {!! Form::number('acc_gateway_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_type_id', 'Payment Type Id:') !!}
    {!! Form::number('payment_type_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_date', 'Payment Date:') !!}
    {!! Form::date('payment_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Transaction Reference Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transaction_reference', 'Transaction Reference:') !!}
    {!! Form::text('transaction_reference', null, ['class' => 'form-control']) !!}
</div>

<!-- Payer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payer_id', 'Payer Id:') !!}
    {!! Form::text('payer_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Public Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('public_id', 'Public Id:') !!}
    {!! Form::number('public_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Refunded Field -->
<div class="form-group col-sm-6">
    {!! Form::label('refunded', 'Refunded:') !!}
    {!! Form::number('refunded', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Status Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_status_id', 'Payment Status Id:') !!}
    {!! Form::number('payment_status_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Routing Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('routing_number', 'Routing Number:') !!}
    {!! Form::number('routing_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Last4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last4', 'Last4:') !!}
    {!! Form::number('last4', null, ['class' => 'form-control']) !!}
</div>

<!-- Expiration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expiration', 'Expiration:') !!}
    {!! Form::date('expiration', null, ['class' => 'form-control']) !!}
</div>

<!-- Gateway Error Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('gateway_error', 'Gateway Error:') !!}
    {!! Form::textarea('gateway_error', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Method Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_method_id', 'Payment Method Id:') !!}
    {!! Form::number('payment_method_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Bank Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank_name', 'Bank Name:') !!}
    {!! Form::text('bank_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Ip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ip', 'Ip:') !!}
    {!! Form::text('ip', null, ['class' => 'form-control']) !!}
</div>

<!-- Credit Ids Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('credit_ids', 'Credit Ids:') !!}
    {!! Form::textarea('credit_ids', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('banking.payments.index') !!}" class="btn btn-default">Cancel</a>
</div>
