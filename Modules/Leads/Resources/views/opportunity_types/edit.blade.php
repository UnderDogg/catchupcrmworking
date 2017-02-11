@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Opportunity Type
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($opportunityType, ['route' => ['leads.opportunityTypes.update', $opportunityType->id], 'method' => 'patch']) !!}

                        @include('leads.opportunity_types.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection