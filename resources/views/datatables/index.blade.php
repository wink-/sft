@extends('layouts.master')

@section('content')
    <table class="table table-bordered" id="customers-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Code</th>
            <th>Name</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
    $(function() {
        $('#customers-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('datatables.data') !!}',
            columns: [
                { data: 'ID', name: 'ID' },
                { data: 'CUSTCODE', name: 'CUSTCODE' },
                { data: 'CUSTNAME', name: 'CUSTNAME' },
                { data: 'created_at', name: 'created_at' },
                { data: 'updated_at', name: 'updated_at' }
            ]
        });
    });
</script>
@endpush