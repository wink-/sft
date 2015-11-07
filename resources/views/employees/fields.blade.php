<!-- Initials Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('Initials', 'Initials:') !!}
	{!! Form::text('Initials', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('Code', 'Code:') !!}
	{!! Form::text('Code', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('Name', 'Name:') !!}
	{!! Form::text('Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Production Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('Production', 'Production:') !!}
	{!! Form::text('Production', null, ['class' => 'form-control']) !!}
</div>

<!-- Supervisor Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('Supervisor', 'Supervisor:') !!}
	{!! Form::number('Supervisor', null, ['class' => 'form-control']) !!}
</div>


<!-- Note Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('Note', 'Note:') !!}
	{!! Form::textarea('Note', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
