@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Team Staff
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($teamStaff, ['route' => ['employees.teamStaffs.update', $teamStaff->id], 'method' => 'patch']) !!}

                        @include('employees.team_staffs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection