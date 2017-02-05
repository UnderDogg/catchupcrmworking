@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Settings System
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($settingsSystem, ['route' => ['core.settingsSystems.update', $settingsSystem->id], 'method' => 'patch']) !!}

                        @include('core.settings_systems.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection