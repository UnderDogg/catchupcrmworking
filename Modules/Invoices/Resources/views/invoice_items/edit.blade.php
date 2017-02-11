@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Invoice Items
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($invoiceItems, ['route' => ['invoices.invoiceItems.update', $invoiceItems->id], 'method' => 'patch']) !!}

                        @include('invoices.invoice_items.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection