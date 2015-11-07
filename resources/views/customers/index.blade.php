@extends('layout')

@section('content')

    <div class="container-fluid">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Customers</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('customers.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($customers->isEmpty())
                <div class="well text-center">No Customers found.</div>
            @else
                @include('customers.table')
            @endif
        </div>

    </div>
@endsection

@section('scripts.footer')

    <script> $(document).ready(function () {

            $('#customers').DataTable({
                "dom": "<'row'<'col-sm-2'l><'col-sm-4'B><'col-sm-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                "buttons": [
                    'copyHtml5',
                    'excelHtml5',
                    'pdfHtml5',
                    {
                        "extend": 'print',
                        "title": "Customers"
                    }
                ],
                "lengthMenu": [[10, 20,  50, -1], [10, 20, 50, "All"]],
                "pageLength": 20,
                "colReorder": 'true'


            });
        });
    </script>
@stop