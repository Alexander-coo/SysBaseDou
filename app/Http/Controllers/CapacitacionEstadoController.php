<?php

namespace App\Http\Controllers;

use App\DataTables\CapacitacionEstadoDataTable;
use App\Http\Requests\CreateCapacitacionEstadoRequest;
use App\Http\Requests\UpdateCapacitacionEstadoRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\CapacitacionEstado;
use Illuminate\Http\Request;

class CapacitacionEstadoController extends AppBaseController
{

    public function __construct()
    {
        $this->middleware('permission:Ver Capacitacion Estados')->only('show');
        $this->middleware('permission:Crear Capacitacion Estados')->only(['create','store']);
        $this->middleware('permission:Editar Capacitacion Estados')->only(['edit','update']);
        $this->middleware('permission:Eliminar Capacitacion Estados')->only('destroy');
    }
    /**
     * Display a listing of the CapacitacionEstado.
     */
    public function index(CapacitacionEstadoDataTable $capacitacionEstadoDataTable)
    {
    return $capacitacionEstadoDataTable->render('capacitacion_estados.index');
    }


    /**
     * Show the form for creating a new CapacitacionEstado.
     */
    public function create()
    {
        return view('capacitacion_estados.create');
    }

    /**
     * Store a newly created CapacitacionEstado in storage.
     */
    public function store(CreateCapacitacionEstadoRequest $request)
    {
        $input = $request->all();

        /** @var CapacitacionEstado $capacitacionEstado */
        $capacitacionEstado = CapacitacionEstado::create($input);

        flash()->success('Capacitacion Estado guardado.');

        return redirect(route('capacitacionEstados.index'));
    }

    /**
     * Display the specified CapacitacionEstado.
     */
    public function show($id)
    {
        /** @var CapacitacionEstado $capacitacionEstado */
        $capacitacionEstado = CapacitacionEstado::find($id);

        if (empty($capacitacionEstado)) {
            flash()->error('Capacitacion Estado no encontrado');

            return redirect(route('capacitacionEstados.index'));
        }

        return view('capacitacion_estados.show')->with('capacitacionEstado', $capacitacionEstado);
    }

    /**
     * Show the form for editing the specified CapacitacionEstado.
     */
    public function edit($id)
    {
        /** @var CapacitacionEstado $capacitacionEstado */
        $capacitacionEstado = CapacitacionEstado::find($id);

        if (empty($capacitacionEstado)) {
            flash()->error('Capacitacion Estado no encontrado');

            return redirect(route('capacitacionEstados.index'));
        }

        return view('capacitacion_estados.edit')->with('capacitacionEstado', $capacitacionEstado);
    }

    /**
     * Update the specified CapacitacionEstado in storage.
     */
    public function update($id, UpdateCapacitacionEstadoRequest $request)
    {
        /** @var CapacitacionEstado $capacitacionEstado */
        $capacitacionEstado = CapacitacionEstado::find($id);

        if (empty($capacitacionEstado)) {
            flash()->error('Capacitacion Estado no encontrado');

            return redirect(route('capacitacionEstados.index'));
        }

        $capacitacionEstado->fill($request->all());
        $capacitacionEstado->save();

        flash()->success('Capacitacion Estado actualizado.');

        return redirect(route('capacitacionEstados.index'));
    }

    /**
     * Remove the specified CapacitacionEstado from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var CapacitacionEstado $capacitacionEstado */
        $capacitacionEstado = CapacitacionEstado::find($id);

        if (empty($capacitacionEstado)) {
            flash()->error('Capacitacion Estado no encontrado');

            return redirect(route('capacitacionEstados.index'));
        }

        $capacitacionEstado->delete();

        flash()->success('Capacitacion Estado eliminado.');

        return redirect(route('capacitacionEstados.index'));
    }
}
