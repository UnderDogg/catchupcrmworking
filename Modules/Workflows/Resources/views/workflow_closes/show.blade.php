@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Workflow Close
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('workflows.workflow_closes.show_fields')
                    <a href="{!! route('workflows.workflowCloses.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
