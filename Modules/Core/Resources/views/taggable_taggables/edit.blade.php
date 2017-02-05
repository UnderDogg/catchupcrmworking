@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Taggable Taggables
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($taggableTaggables, ['route' => ['core.taggableTaggables.update', $taggableTaggables->id], 'method' => 'patch']) !!}

                        @include('core.taggable_taggables.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection