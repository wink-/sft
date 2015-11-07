@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($process, ['route' => ['processes.update', $process->id], 'method' => 'patch']) !!}

        @include('processes.fields')

    {!! Form::close() !!}
</div>
@endsection
