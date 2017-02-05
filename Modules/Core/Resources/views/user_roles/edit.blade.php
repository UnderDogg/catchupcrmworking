@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User Roles
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($userRoles, ['route' => ['core.userRoles.update', $userRoles->id], 'method' => 'patch']) !!}

                        @include('core.user_roles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection