@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Processes</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('processes.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($processes->isEmpty())
                <div class="well text-center">No Processes found.</div>
            @else
                @include('processes.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $processes])


    </div>
@endsection