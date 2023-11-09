<?php

namespace App\Http\Controllers;

use App\Models\Soporte;
use Illuminate\Http\Request;

class CapturaSoporte extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth'])->only(['index']);
    }

    public function index()
    {
        $items = Soporte::all();
        return view('modules/captura_soporte/index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules/captura_soporte/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Soporte();
        $item->cliente = $request->post('cliente');
        $item->trabajo = $request->post('trabajo');
        $item->monto = $request->post('monto');
        $item->fecha = $request->post('fecha');
        $item->telefono = $request->post('telefono');
        $item->correo = $request->post('correo');
        $item->trabajo_futuro = $request->post('trabajo_futuro');
        $item->fecha_futura = $request->post('fecha_futura');
        $item->save();

        return redirect()->route('soporte-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Soporte::find($id);
        return view('modules/captura_soporte/edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Soporte::find($id);
        $item->cliente = $request->post('cliente');
        $item->trabajo = $request->post('trabajo');
        $item->monto = $request->post('monto');
        $item->fecha = $request->post('fecha');
        $item->telefono = $request->post('telefono');
        $item->correo = $request->post('correo');
        $item->trabajo_futuro = $request->post('trabajo_futuro');
        $item->fecha_futura = $request->post('fecha_futura');
        $item->save();

        return redirect()->route('soporte-index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Soporte::find($id);
        $item->delete();
        return redirect()->route('soporte-index');
    }
}
