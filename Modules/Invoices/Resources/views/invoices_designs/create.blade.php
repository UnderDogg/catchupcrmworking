@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Invoices Designs
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'invoices.invoicesDesigns.store']) !!}

                        @include('invoices.invoices_designs.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
