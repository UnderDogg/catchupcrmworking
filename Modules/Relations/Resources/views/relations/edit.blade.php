@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Relations
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($relations, ['route' => ['relations.relations.update', $relations->id], 'method' => 'patch']) !!}

                        @include('relations.relations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection