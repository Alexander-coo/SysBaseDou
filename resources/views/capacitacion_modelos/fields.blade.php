<!-- Marca Id Field -->
<div class="form-group col-sm-6">

    {!! Form::label('marca_id', 'Asignar Notario:') !!}
    {!! Form::select(
        'marca_id',
        select(\App\Models\Capacitacionmarca::class, 'nombre'),
        ['id' => 'marca_id', 'class' => 'form-control', 'style' => 'width: 100%']

    ) !!}

</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>
