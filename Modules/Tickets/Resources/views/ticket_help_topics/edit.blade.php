@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ticket Help Topics
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ticketHelpTopics, ['route' => ['tickets.ticketHelpTopics.update', $ticketHelpTopics->id], 'method' => 'patch']) !!}

                        @include('tickets.ticket_help_topics.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection