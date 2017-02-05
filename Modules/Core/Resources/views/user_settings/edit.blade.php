@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User Settings
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($userSettings, ['route' => ['core.userSettings.update', $userSettings->id], 'method' => 'patch']) !!}

                        @include('core.user_settings.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection