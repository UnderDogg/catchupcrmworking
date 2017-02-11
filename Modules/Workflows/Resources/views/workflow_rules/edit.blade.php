@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Workflow Rules
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($workflowRules, ['route' => ['workflows.workflowRules.update', $workflowRules->id], 'method' => 'patch']) !!}

                        @include('workflows.workflow_rules.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection