@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Settings Alert Notice
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'core.settingsAlertNotices.store']) !!}

                        @include('core.settings_alert_notices.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
