<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Estado;
use App\Repositories\Pais;

class EstadoController extends Controller
{
    protected $estado;

    public function __construct(Estado $estado)
    {
        $this->middleware('auth');
        $this->estado = $estado;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estado = new Estado;
        return view('admin.cestado')->with('estados', $estado->all()); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pais = new Pais;
        return view('admin.estado_create')->with('paises',$pais->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estado = new Estado;
        $status = $estado->guardar($request->input('name'),$request->input('country'));
        if ($status == 1) {
            // No se pudo guardar
        }else {
            return redirect()->action('Admin\EstadoController@index');
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
        return view('estado_show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   // Buscar por id y enviarlo a la vista
        $estado = new Estado;
        $encontrado = $estado->findOne($id);
        return view('admin.estado_edit')->with('estado',$encontrado);
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
        $estado = new Estado;
        $estado->update($request->input('code'), $request->input('name'),$id);
        return redirect()->action('Admin\EstadoController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estado = new Estado;
        $estado->borrar($id);
        return redirect()->action('Admin\EstadoController@index');
    }
}
