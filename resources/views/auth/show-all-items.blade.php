@extends('adminlte::page')

@section('title', 'BeauteDerm')

@section('content_header')
    <h1>All Items Table</h1>

@endsection


@section('content')
    <table class="display" id="users-table" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>SRP</th>
                <th>Reseller</th>
                <th>Distributor</th>
                <th>MegaDistributor</th>
                <th></th>
            </tr>
        </thead>
    </table>
@endsection

@push('js')

<script src="{{ asset('/js/jquery/table/item-datatables.js') }}" type="text/javascript"> </script>

@endpush
