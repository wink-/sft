<!-- Procname Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('PROCNAME', 'Procname:') !!}
	{!! Form::text('PROCNAME', null, ['class' => 'form-control']) !!}
</div>

<!-- Descript Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('DESCRIPT', 'Descript:') !!}
	{!! Form::text('DESCRIPT', null, ['class' => 'form-control']) !!}
</div>

<!-- Mincost Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('MINCOST', 'Mincost:') !!}
	{!! Form::number('MINCOST', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('ID', 'Id:') !!}
	{!! Form::number('ID', null, ['class' => 'form-control']) !!}
</div>

<!-- Timestamp Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('TimeStamp', 'Timestamp:') !!}
	{!! Form::date('TimeStamp', null, ['class' => 'form-control']) !!}
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('created_at', 'Created At:') !!}
	{!! Form::date('created_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('updated_at', 'Updated At:') !!}
	{!! Form::date('updated_at', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
