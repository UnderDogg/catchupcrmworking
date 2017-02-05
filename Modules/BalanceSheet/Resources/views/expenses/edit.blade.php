@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Expenses
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($expenses, ['route' => ['balancesheet.expenses.update', $expenses->id], 'method' => 'patch']) !!}

                        @include('balancesheet.expenses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection