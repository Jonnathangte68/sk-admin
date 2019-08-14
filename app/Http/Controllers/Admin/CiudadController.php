<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Ciudad;
use App\Repositories\Estado;

class CiudadController extends Controller
{
    protected $ciudad;

    public function __construct(Ciudad $ciudad)
    {
        $this->middleware('auth');
        $this->ciudad = $ciudad;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudad = new Ciudad;
        return view('admin.cciudad')->with('ciudades', $ciudad->all()); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estado = new Estado;
        return view('admin.ciudad_create')->with('estados',$estado->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ciudad = new Ciudad;
        $status = $ciudad->guardar($request->input('name'),$request->input('state'));
        if ($status == 1) {
            // No se pudo guardar
        }else {
            return redirect()->action('Admin\CiudadController@index');
        }
        //$this->redirect()
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('ciudad_show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   // Buscar por id y enviarlo a la vista
        $ciudad = new Ciudad;
        $encontrado = $ciudad->findOne($id);
        return view('admin.ciudad_edit')->with('ciudad',$encontrado);
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
        $ciudad = new Ciudad;
        $ciudad->update($request->input('code'), $request->input('name'),$id);
        return redirect()->action('Admin\CiudadController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ciudad = new Ciudad;
        $ciudad->borrar($id);
        return redirect()->action('Admin\CiudadController@index');
    }
}
