@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Relation Type
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($relationType, ['route' => ['relations.relationTypes.update', $relationType->id], 'method' => 'patch']) !!}

                        @include('relations.relation_types.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection