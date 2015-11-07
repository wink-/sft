@extends('layout')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($customer, ['route' => ['customers.update', $customer->id], 'method' => 'patch']) !!}

        @include('customers.fields')

    {!! Form::close() !!}
</div>
@endsection
