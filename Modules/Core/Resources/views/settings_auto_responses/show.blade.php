@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Settings Auto Response
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('core.settings_auto_responses.show_fields')
                    <a href="{!! route('core.settingsAutoResponses.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
