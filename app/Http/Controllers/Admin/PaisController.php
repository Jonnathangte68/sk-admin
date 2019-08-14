<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Pais;

class PaisController extends Controller
{
    protected $pais;

    public function __construct(Pais $pais)
    {
        $this->middleware('auth');
        $this->pais = $pais;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pais = new Pais;
        return view('admin.cpais')->with('paises', $pais->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pais_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pais = new Pais;
        $status = $pais->guardar($request->input('name'),$request->input('code'));
        if ($status == 1) {
            // No se pudo guardar
        }else {
            return redirect()->action('Admin\PaisController@index');
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
        return view('pais_show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   // Buscar por id y enviarlo a la vista
        $pais = new Pais;
        $encontrado = $pais->findOne($id);
        return view('admin.pais_edit')->with('pais',$encontrado);
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
        $pais = new Pais;
        $pais->update($request->input('code'), $request->input('name'),$id);
        return redirect()->action('Admin\PaisController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pais = new Pais;
        $pais->borrar($id);
        return redirect()->action('Admin\PaisController@index');
    }
}
