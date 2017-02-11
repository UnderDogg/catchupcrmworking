@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ticket Types
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ticketTypes, ['route' => ['tickets.ticketTypes.update', $ticketTypes->id], 'method' => 'patch']) !!}

                        @include('tickets.ticket_types.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection