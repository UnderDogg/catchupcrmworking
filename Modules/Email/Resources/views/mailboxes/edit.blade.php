@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mailboxes
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mailboxes, ['route' => ['email.mailboxes.update', $mailboxes->id], 'method' => 'patch']) !!}

                        @include('email.mailboxes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection