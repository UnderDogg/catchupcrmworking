@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mailtemplates Sets
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mailtemplatesSets, ['route' => ['email.mailtemplatesSets.update', $mailtemplatesSets->id], 'method' => 'patch']) !!}

                        @include('email.mailtemplates_sets.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection