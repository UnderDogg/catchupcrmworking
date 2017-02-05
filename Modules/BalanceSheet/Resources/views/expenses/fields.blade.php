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

<!-- Vendor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vendor_id', 'Vendor Id:') !!}
    {!! Form::number('vendor_id', null, ['class' => 'form-control']) !!}
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

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Exchange Rate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('exchange_rate', 'Exchange Rate:') !!}
    {!! Form::number('exchange_rate', null, ['class' => 'form-control']) !!}
</div>

<!-- Expense Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expense_date', 'Expense Date:') !!}
    {!! Form::date('expense_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Private Notes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('private_notes', 'Private Notes:') !!}
    {!! Form::textarea('private_notes', null, ['class' => 'form-control']) !!}
</div>

<!-- Public Notes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('public_notes', 'Public Notes:') !!}
    {!! Form::textarea('public_notes', null, ['class' => 'form-control']) !!}
</div>

<!-- Invoice Currency Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoice_currency_id', 'Invoice Currency Id:') !!}
    {!! Form::number('invoice_currency_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Public Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('public_id', 'Public Id:') !!}
    {!! Form::number('public_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Transaction Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transaction_id', 'Transaction Id:') !!}
    {!! Form::text('transaction_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Bank Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank_id', 'Bank Id:') !!}
    {!! Form::number('bank_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Expense Currency Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expense_currency_id', 'Expense Currency Id:') !!}
    {!! Form::number('expense_currency_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Expense Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expense_category_id', 'Expense Category Id:') !!}
    {!! Form::number('expense_category_id', null, ['class' => 'form-control']) !!}
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
    <a href="{!! route('balancesheet.expenses.index') !!}" class="btn btn-default">Cancel</a>
</div>
