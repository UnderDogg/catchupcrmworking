@section('css')
    @include('core::layouts.datatables_css')
@endsection

{!! $dataTable->table(['width' => '100%']) !!}

@section('scripts')
    @include('core::layouts.datatables_js')
    {!! $dataTable->scripts() !!}
@endsection