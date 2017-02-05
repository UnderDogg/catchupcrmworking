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
                    {!! Form::open(['route' => 'email.mailtemplatesSets.store']) !!}

                        @include('email.mailtemplates_sets.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
