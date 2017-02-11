@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Opportunity Stage
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($opportunityStage, ['route' => ['leads.opportunityStages.update', $opportunityStage->id], 'method' => 'patch']) !!}

                        @include('leads.opportunity_stages.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection