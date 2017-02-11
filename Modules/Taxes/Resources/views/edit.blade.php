@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tax Rates
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($taxRates, ['route' => ['taxes.taxRates.update', $taxRates->id], 'method' => 'patch']) !!}

                        @include('taxes.tax_rates.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection