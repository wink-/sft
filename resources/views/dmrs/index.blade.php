@extends('layout')

@section('content')
    <form method="POST" action="/dmrs/stage">
        <div class="row">

            <div class="col-md-6">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="WORKORDR">Workorder:</label>
                    <input type="text" name="WORKORDR" id="WORKORDR" class="form-control" value="{{ old('WORKORDR') }}"required>
                </div>


                <hr>

                <div class="form-group">
                    <button type="submit" class="btn  btn-primary">Find Workorder</button>
                </div>

            </div>
    </form>




@stop

@section('scripts.footer')

@stop