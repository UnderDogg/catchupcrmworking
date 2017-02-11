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

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Invoice Status Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoice_status_id', 'Invoice Status Id:') !!}
    {!! Form::number('invoice_status_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Invoice Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoice_number', 'Invoice Number:') !!}
    {!! Form::text('invoice_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Discount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discount', 'Discount:') !!}
    {!! Form::number('discount', null, ['class' => 'form-control']) !!}
</div>

<!-- Po Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('po_number', 'Po Number:') !!}
    {!! Form::text('po_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Invoice Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoice_date', 'Invoice Date:') !!}
    {!! Form::date('invoice_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Due Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('due_date', 'Due Date:') !!}
    {!! Form::date('due_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Terms Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('terms', 'Terms:') !!}
    {!! Form::textarea('terms', null, ['class' => 'form-control']) !!}
</div>

<!-- Public Notes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('public_notes', 'Public Notes:') !!}
    {!! Form::textarea('public_notes', null, ['class' => 'form-control']) !!}
</div>

<!-- Frequency Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('frequency_id', 'Frequency Id:') !!}
    {!! Form::number('frequency_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_date', 'Start Date:') !!}
    {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
</div>

<!-- End Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_date', 'End Date:') !!}
    {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Sent Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_sent_date', 'Last Sent Date:') !!}
    {!! Form::date('last_sent_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Recurring Invoice Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('recurring_invoice_id', 'Recurring Invoice Id:') !!}
    {!! Form::number('recurring_invoice_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tax Name1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tax_name1', 'Tax Name1:') !!}
    {!! Form::text('tax_name1', null, ['class' => 'form-control']) !!}
</div>

<!-- Tax Rate1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tax_rate1', 'Tax Rate1:') !!}
    {!! Form::number('tax_rate1', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Balance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('balance', 'Balance:') !!}
    {!! Form::number('balance', null, ['class' => 'form-control']) !!}
</div>

<!-- Public Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('public_id', 'Public Id:') !!}
    {!! Form::number('public_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Invoice Design Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoice_design_id', 'Invoice Design Id:') !!}
    {!! Form::number('invoice_design_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Quote Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quote_id', 'Quote Id:') !!}
    {!! Form::number('quote_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Quote Invoice Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quote_invoice_id', 'Quote Invoice Id:') !!}
    {!! Form::number('quote_invoice_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Custom Value1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('custom_value1', 'Custom Value1:') !!}
    {!! Form::number('custom_value1', null, ['class' => 'form-control']) !!}
</div>

<!-- Custom Value2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('custom_value2', 'Custom Value2:') !!}
    {!! Form::number('custom_value2', null, ['class' => 'form-control']) !!}
</div>

<!-- Invoice Footer Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('invoice_footer', 'Invoice Footer:') !!}
    {!! Form::textarea('invoice_footer', null, ['class' => 'form-control']) !!}
</div>

<!-- Partial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('partial', 'Partial:') !!}
    {!! Form::number('partial', null, ['class' => 'form-control']) !!}
</div>

<!-- Custom Text Value1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('custom_text_value1', 'Custom Text Value1:') !!}
    {!! Form::text('custom_text_value1', null, ['class' => 'form-control']) !!}
</div>

<!-- Custom Text Value2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('custom_text_value2', 'Custom Text Value2:') !!}
    {!! Form::text('custom_text_value2', null, ['class' => 'form-control']) !!}
</div>

<!-- Tax Name2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tax_name2', 'Tax Name2:') !!}
    {!! Form::text('tax_name2', null, ['class' => 'form-control']) !!}
</div>

<!-- Tax Rate2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tax_rate2', 'Tax Rate2:') !!}
    {!! Form::number('tax_rate2', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('invoices.invoices.index') !!}" class="btn btn-default">Cancel</a>
</div>
