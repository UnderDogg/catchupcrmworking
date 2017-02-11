@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Lead Source
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($leadSource, ['route' => ['leads.leadSources.update', $leadSource->id], 'method' => 'patch']) !!}

                        @include('leads.lead_sources.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection