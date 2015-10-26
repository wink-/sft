@extends('layout')

@section('content')
    <h2>Create a new DMR</h2>

    <p><b>WO:</b> {{ $workorder->WORKORDR }} <b>CUSTOMER:</b> {{ $workorder->CUSTCODE }} <b>PN:</b> {{ $workorder->PARTNUM }} <b>PROC:</b> {{ $workorder->PROCNAME }} </p>
    <hr>
    <form method="POST" action="/dmrs" enctype="multipart/form-data" >
        @include('dmrs.form')
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </form>

@stop