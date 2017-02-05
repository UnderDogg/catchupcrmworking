@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Settings Alert Notice
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($settingsAlertNotice, ['route' => ['core.settingsAlertNotices.update', $settingsAlertNotice->id], 'method' => 'patch']) !!}

                        @include('core.settings_alert_notices.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection