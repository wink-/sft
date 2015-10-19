@extends('layout')

@section('content')
<h1>Show Page!</h1>
    <div class="row">
        <div class="col-md-4">
            <h1>{{ $workorder->CUSTCODE }}</h1>
        </div>


    </div>





@stop

@section('scripts.footer')

@stop
