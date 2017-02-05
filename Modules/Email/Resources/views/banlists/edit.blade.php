@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Banlist
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($banlist, ['route' => ['email.banlists.update', $banlist->id], 'method' => 'patch']) !!}

                        @include('email.banlists.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection