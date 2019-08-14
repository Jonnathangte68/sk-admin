<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Categoria;

class CategoriaController extends Controller
{
    protected $categoria;

    public function __construct(Categoria $categoria)
    {
        $this->middleware('auth');
        $this->categoria = $categoria;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = new Categoria;
        return view('admin.ccategoria')->with('categorias', $categoria->all()); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categoria_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new Categoria;
        $status = $categoria->guardar($request->input('name'),$request->input('description'),$request->input('status'));
        if ($status == 1) {
            // No se pudo guardar
        }else {
            return redirect()->action('Admin\CategoriaController@index');
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
        return view('categoria_show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   // Buscar por id y enviarlo a la vista
        $categoria = new Categoria;
        $encontrado = $categoria->findOne($id);
        return view('admin.categoria_edit')->with('categoria',$encontrado);
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
        $categoria = new Categoria;
        $categoria->update($request->input('name'),$request->input('description'),$request->input('status'),$id);
        return redirect()->action('Admin\CategoriaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = new Categoria;
        $categoria->borrar($id);
        return redirect()->action('Admin\CategoriaController@index');
    }
}
