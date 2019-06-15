@extends('adminlte::page')

@section('title', 'BeauteDerm')

@section('content_header')
    <h1>All Users Table</h1>

@endsection


@section('content')
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Completed</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
    </table>
@endsection

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! url('/getuser') !!}',
        columns: [
            { data: 'id',id: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', email: 'email' },
            { data: 'completed', completed: 'completed' },
            { data: 'created_at', created_at: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>
@endpush

