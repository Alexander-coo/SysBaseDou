<!-- Marca Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marca_id', 'Marca Id:') !!}
    <div class="form-group col-sm-6">

        {!! Form::label('marca_id', 'Marca:') !!}
        {!! Form::select(
            'marca_id',
            select(\App\Models\CapacitacionMarca::class, 'nombre'),
            ['id' => 'marca_id', 'class' => 'form-control', 'style' => 'width: 100%']

        ) !!}

    </div>
</div>

<!-- Modelo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modelo_id', 'Modelo Id:') !!}
    <div class="form-group col-sm-6">

        {!! Form::label('modelo_id', 'modelo:') !!}
        {!! Form::select(
            'modelo_id',
            select(\App\Models\CapacitacionModelo::class, 'nombre'),
            ['id' => 'modelo_id', 'class' => 'form-control', 'style' => 'width: 100%']

        ) !!}

    </div>
</div>



<!-- Tipo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_id', 'Tipo Id:') !!}
    <div class="form-group col-sm-6">

        {!! Form::label('tipo_id', 'Tipo:') !!}
        {!! Form::select(
            'tipo_id',
            select(\App\Models\CapacitacionTipo::class, 'nombre'),
            ['id' => 'tipo_id', 'class' => 'form-control', 'style' => 'width: 100%']

        ) !!}

    </div>

<!-- Numero Serie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_serie', 'Numero Serie:') !!}
    {!! Form::text('numero_serie', null, ['class' => 'form-control', 'required', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Imei Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imei', 'Imei:') !!}
    {!! Form::text('imei', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>
