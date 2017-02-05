@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Companies
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($companies, ['route' => ['core.companies.update', $companies->id], 'method' => 'patch']) !!}

                        @include('core.companies.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection