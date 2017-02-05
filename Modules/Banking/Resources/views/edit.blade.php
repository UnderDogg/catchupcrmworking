@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Payments
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($payments, ['route' => ['banking.payments.update', $payments->id], 'method' => 'patch']) !!}

                        @include('banking.payments.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection