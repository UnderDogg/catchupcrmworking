@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Relation Communication
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($relationCommunication, ['route' => ['relations.relationCommunications.update', $relationCommunication->id], 'method' => 'patch']) !!}

                        @include('relations.relation_communications.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection