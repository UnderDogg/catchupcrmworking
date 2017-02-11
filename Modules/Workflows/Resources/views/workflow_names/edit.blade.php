@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Workflow Name
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($workflowName, ['route' => ['workflows.workflowNames.update', $workflowName->id], 'method' => 'patch']) !!}

                        @include('workflows.workflow_names.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection