@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Settings Tickets
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($settingsTickets, ['route' => ['core.settingsTickets.update', $settingsTickets->id], 'method' => 'patch']) !!}

                        @include('core.settings_tickets.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection