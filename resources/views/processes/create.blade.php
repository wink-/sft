@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'processes.store']) !!}

        @include('processes.fields')

    {!! Form::close() !!}
</div>
@endsection
