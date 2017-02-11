@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Relation Mail Adresses
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($relationMailAdresses, ['route' => ['relations.relationMailAdresses.update', $relationMailAdresses->id], 'method' => 'patch']) !!}

                        @include('relations.relation_mail_adresses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection