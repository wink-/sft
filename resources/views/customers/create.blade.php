@extends('layout')

@section('content')
<div class="container-fluid">
<h1>Create A New Customer</h1>
    @include('common.errors')

    {!! Form::open(['route' => 'customers.store']) !!}

        @include('customers.fields')

    {!! Form::close() !!}
</div>
@endsection
