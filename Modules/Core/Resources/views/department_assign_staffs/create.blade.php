@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Department Assign Staff
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'core.departmentAssignStaffs.store']) !!}

                        @include('core.department_assign_staffs.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
