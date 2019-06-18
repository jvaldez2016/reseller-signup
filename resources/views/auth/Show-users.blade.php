@extends('adminlte::page')

@section('title', 'BeauteDerm')

@section('content_header')
    <h1>All Users Table</h1>

@endsection


@section('content')
    <table class="row-border hover order-column" id="users-table" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Finished Registration</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
    </table>
@endsection

@push('js')

<script src="{{ asset('/js/jquery/table/datatables.js') }}" type="text/javascript"> </script>

@endpush
