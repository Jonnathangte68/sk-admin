<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Nivel;

class NivelController extends Controller
{
    protected $nivel;

    public function __construct(Nivel $nivel)
    {
        $this->middleware('auth');
        $this->nivel = $nivel;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nivel = new Nivel;
        return view('admin.cnivel')->with('niveles', $nivel->all()); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.nivel_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nivel = new Nivel;
        $status = $nivel->guardar($request->input('name'),$request->input('description'),$request->input('state'));
        if ($status == 1) {
            // No se pudo guardar
        }else {
            return redirect()->action('Admin\NivelController@index');
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
        return view('nivel_show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   // Buscar por id y enviarlo a la vista
        $nivel = new Nivel;
        $encontrado = $nivel->findOne($id);
        return view('admin.nivel_edit')->with('nivel',$encontrado);
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
        $nivel = new Nivel;
        $nivel->update($request->input('name'),$request->input('description'),$request->input('state'),$id);
        return redirect()->action('Admin\NivelController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nivel = new Nivel;
        $nivel->borrar($id);
        return redirect()->action('Admin\NivelController@index');
    }
}
