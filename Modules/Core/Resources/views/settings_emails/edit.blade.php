@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Settings Email
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($settingsEmail, ['route' => ['core.settingsEmails.update', $settingsEmail->id], 'method' => 'patch']) !!}

                        @include('core.settings_emails.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection