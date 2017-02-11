<!-- Relation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('relation_id', 'Relation Id:') !!}
    {!! Form::number('relation_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Addresstype Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('addresstype_id', 'Addresstype Id:') !!}
    {!! Form::number('addresstype_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Address2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address2', 'Address2:') !!}
    {!! Form::text('address2', null, ['class' => 'form-control']) !!}
</div>

<!-- Housenumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('housenumber', 'Housenumber:') !!}
    {!! Form::text('housenumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Housenumberaddition Field -->
<div class="form-group col-sm-6">
    {!! Form::label('housenumberaddition', 'Housenumberaddition:') !!}
    {!! Form::text('housenumberaddition', null, ['class' => 'form-control']) !!}
</div>

<!-- Postalcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('postalcode', 'Postalcode:') !!}
    {!! Form::text('postalcode', null, ['class' => 'form-control']) !!}
</div>

<!-- City Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city_id', 'City Id:') !!}
    {!! Form::number('city_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_id', 'Country Id:') !!}
    {!! Form::number('country_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax', 'Fax:') !!}
    {!! Form::text('fax', null, ['class' => 'form-control']) !!}
</div>

<!-- Website Field -->
<div class="form-group col-sm-6">
    {!! Form::label('website', 'Website:') !!}
    {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

<!-- Dateline Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateline', 'Dateline:') !!}
    {!! Form::number('dateline', null, ['class' => 'form-control']) !!}
</div>

<!-- Lastupdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lastupdate', 'Lastupdate:') !!}
    {!! Form::number('lastupdate', null, ['class' => 'form-control']) !!}
</div>

<!-- Languageid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('languageid', 'Languageid:') !!}
    {!! Form::number('languageid', null, ['class' => 'form-control']) !!}
</div>

<!-- Slaplanid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slaplanid', 'Slaplanid:') !!}
    {!! Form::number('slaplanid', null, ['class' => 'form-control']) !!}
</div>

<!-- Slaexpirytimeline Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slaexpirytimeline', 'Slaexpirytimeline:') !!}
    {!! Form::number('slaexpirytimeline', null, ['class' => 'form-control']) !!}
</div>

<!-- Usergroupid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usergroupid', 'Usergroupid:') !!}
    {!! Form::number('usergroupid', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('relations.relationAdresses.index') !!}" class="btn btn-default">Cancel</a>
</div>
