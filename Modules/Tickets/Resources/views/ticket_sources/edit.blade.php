@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ticket Sources
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ticketSources, ['route' => ['tickets.ticketSources.update', $ticketSources->id], 'method' => 'patch']) !!}

                        @include('tickets.ticket_sources.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection