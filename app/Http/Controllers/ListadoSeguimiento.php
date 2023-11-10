<?php

namespace App\Http\Controllers;

use App\Models\Soporte;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ListadoSeguimiento extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth'])->only(['index']);
    }

    public function index()
    {
        $fecha_inicio = Carbon::now()->toDateString();
        $fecha_fin = Carbon::now()->addDays(7)->toDateString();
        $items = Soporte::WhereDate('fecha_futura', '>=', $fecha_inicio)
                        ->WhereDate('fecha_futura', '<=', $fecha_fin)
                        ->get();
        return view('modules/listado_seguimiento/index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
