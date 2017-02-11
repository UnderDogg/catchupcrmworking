@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Opportunities
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'leads.opportunities.store']) !!}

                        @include('leads.opportunities.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
