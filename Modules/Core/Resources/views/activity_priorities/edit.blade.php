@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Activity Priority
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($activityPriority, ['route' => ['core.activityPriorities.update', $activityPriority->id], 'method' => 'patch']) !!}

                        @include('core.activity_priorities.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection