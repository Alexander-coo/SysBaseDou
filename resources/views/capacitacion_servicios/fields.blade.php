<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Cliente Id:') !!}
    <div class="form-group col-sm-6">
        {!! Form::label('cliente_id','Cliente') !!}
        {!!
            Form::select(
                'cliente_id',
                \App\Models\CapacitacionCliente::select(DB::raw("CONCAT(nombres, ' ', apellidos) AS full_name, id"))
                ->pluck('full_name', 'id')->prepend('SELECCIONE UNO..', '')
                , null
                , ['id'=>'cliente','class' => 'form-control','style'=>'width: 100%']
            )
        !!}
    </div>
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    <div class="form-group col-sm-6">
        {!! Form::label('user_id','User') !!}
        {!!
            Form::select(
                'user_id',
                select(\App\Models\User::class, 'username')
                , null
                , ['id'=>'user','class' => 'form-control','style'=>'width: 100%']
            )
        !!}
    </div>
</div>

<!-- Equipo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('equipo_id', 'Equipo Id:') !!}
    <div class="form-group col-sm-6">
        {!! Form::label('equipo_id', 'Asignar Equipo:') !!}
        <a href="{{route('capacitacionEquipos.create')}}">Nuevo</a>
        <div class="form-group col-sm-12">
            {!! Form::select(
                'equipo_id',
                select(\App\Models\capacitacionEquipo::class,'texto'),
                null,
                ['id' => 'equipo_id', 'class' => 'form-control col-sm-12']
            ) !!}
        </div>
    </div>
</div>

<!-- Estado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_id', 'Estado Id:') !!}
    <div class="form-group col-sm-6">
        {!! Form::label('estado_id','Estado:') !!}
        {!!
            Form::select(
                'estado_id',
                select(\App\Models\CapacitacionEstado::class)
                , null
                , ['id'=>'estado_id','class' => 'form-control','style'=>'width: 100%']
            )
        !!}
    </div>
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio', 'Precio:') !!}
    {!! Form::number('precio', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Recepcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_recepcion', 'Fecha Recepcion:') !!}
    {!! Form::date('fecha_recepcion', null, ['class' => 'form-control','id'=>'fecha_recepcion']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_recepcion').datepicker()
    </script>
@endpush

<!-- Problema Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('problema', 'Problema:') !!}
    {!! Form::textarea('problema', null, ['class' => 'form-control', 'required', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Fecha Diagnostico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_diagnostico', 'Fecha Diagnostico:') !!}
    {!! Form::date('fecha_diagnostico', null, ['class' => 'form-control','id'=>'fecha_diagnostico']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_diagnostico').datepicker()
    </script>
@endpush

<!-- Diagnostico Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('diagnostico', 'Diagnostico:') !!}
    {!! Form::textarea('diagnostico', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Fecha Entrega Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_entrega', 'Fecha Entrega:') !!}
    {!! Form::date('fecha_entrega', null, ['class' => 'form-control','id'=>'fecha_entrega']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_entrega').datepicker()
    </script>
@endpush

<!-- Solucion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('solucion', 'Solucion:') !!}
    {!! Form::textarea('solucion', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>
