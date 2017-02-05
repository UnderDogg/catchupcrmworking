<!-- User Role Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_role', 'User Role:') !!}
    {!! Form::number('user_role', null, ['class' => 'form-control']) !!}
</div>

<!-- Relation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('relation_id', 'Relation Id:') !!}
    {!! Form::number('relation_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_name', 'User Name:') !!}
    {!! Form::text('user_name', null, ['class' => 'form-control']) !!}
</div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Salutation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salutation', 'Salutation:') !!}
    {!! Form::number('salutation', null, ['class' => 'form-control']) !!}
</div>

<!-- Userdesignation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('userdesignation', 'Userdesignation:') !!}
    {!! Form::text('userdesignation', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::number('gender', null, ['class' => 'form-control']) !!}
</div>

<!-- Emailaddress Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emailaddress', 'Emailaddress:') !!}
    {!! Form::text('emailaddress', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Phonenumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phonenumber', 'Phonenumber:') !!}
    {!! Form::text('phonenumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Mobilenumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mobilenumber', 'Mobilenumber:') !!}
    {!! Form::text('mobilenumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Language Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('language_id', 'Language Id:') !!}
    {!! Form::number('language_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Timezonephp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('timezonephp', 'Timezonephp:') !!}
    {!! Form::text('timezonephp', null, ['class' => 'form-control']) !!}
</div>

<!-- Internal Note Field -->
<div class="form-group col-sm-6">
    {!! Form::label('internal_note', 'Internal Note:') !!}
    {!! Form::text('internal_note', null, ['class' => 'form-control']) !!}
</div>

<!-- Profile Pic Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profile_pic', 'Profile Pic:') !!}
    {!! Form::text('profile_pic', null, ['class' => 'form-control']) !!}
</div>

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control']) !!}
</div>

<!-- Lastvisit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lastvisit', 'Lastvisit:') !!}
    {!! Form::date('lastvisit', null, ['class' => 'form-control']) !!}
</div>

<!-- Lastvisit2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lastvisit2', 'Lastvisit2:') !!}
    {!! Form::date('lastvisit2', null, ['class' => 'form-control']) !!}
</div>

<!-- Lastactivity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lastactivity', 'Lastactivity:') !!}
    {!! Form::date('lastactivity', null, ['class' => 'form-control']) !!}
</div>

<!-- Lastvisitip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lastvisitip', 'Lastvisitip:') !!}
    {!! Form::text('lastvisitip', null, ['class' => 'form-control']) !!}
</div>

<!-- Lastvisitip2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lastvisitip2', 'Lastvisitip2:') !!}
    {!! Form::text('lastvisitip2', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('core.users.index') !!}" class="btn btn-default">Cancel</a>
</div>
