<!-- Company Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_id', 'Company Id:') !!}
    {!! Form::number('company_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Invoice Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoice_id', 'Invoice Id:') !!}
    {!! Form::number('invoice_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_id', 'Product Id:') !!}
    {!! Form::number('product_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Key Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_key', 'Product Key:') !!}
    {!! Form::text('product_key', null, ['class' => 'form-control']) !!}
</div>

<!-- Notes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('notes', 'Notes:') !!}
    {!! Form::textarea('notes', null, ['class' => 'form-control']) !!}
</div>

<!-- Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cost', 'Cost:') !!}
    {!! Form::number('cost', null, ['class' => 'form-control']) !!}
</div>

<!-- Qty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qty', 'Qty:') !!}
    {!! Form::number('qty', null, ['class' => 'form-control']) !!}
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

<!-- Public Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('public_id', 'Public Id:') !!}
    {!! Form::number('public_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Custom Value1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('custom_value1', 'Custom Value1:') !!}
    {!! Form::text('custom_value1', null, ['class' => 'form-control']) !!}
</div>

<!-- Custom Value2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('custom_value2', 'Custom Value2:') !!}
    {!! Form::text('custom_value2', null, ['class' => 'form-control']) !!}
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
    <a href="{!! route('invoices.invoiceItems.index') !!}" class="btn btn-default">Cancel</a>
</div>
