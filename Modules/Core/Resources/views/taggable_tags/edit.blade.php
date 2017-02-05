@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Taggable Tags
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($taggableTags, ['route' => ['core.taggableTags.update', $taggableTags->id], 'method' => 'patch']) !!}

                        @include('core.taggable_tags.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection