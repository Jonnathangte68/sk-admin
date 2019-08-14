<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\SubCategoria;
use App\Repositories\Categoria;

class SubcategoriaController extends Controller
{
    protected $subcategoria;

    public function __construct(Subcategoria $subcategoria)
    {
        $this->middleware('auth');
        $this->subcategoria = $subcategoria;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategoria = new SubCategoria;
        return view('admin.csubcategoria')->with('subcategorias', $subcategoria->all()); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = new Categoria;
        return view('admin.subcategoria_create')->with('categorias',$categoria->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subcategoria = new SubCategoria;
        $status = $subcategoria->guardar($request->input('name'),$request->input('description'),$request->input('status'),$request->input('category'));
        if ($status == 1) {
            // No se pudo guardar
        }else {
            return redirect()->action('Admin\SubcategoriaController@index');
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
        return view('subcategoria_show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   // Buscar por id y enviarlo a la vista
        $subcategoria = new SubCategoria;
        $encontrado = $subcategoria->findOne($id);
        return view('admin.subcategoria_edit')->with('subcategoria',$encontrado);
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
        $subcategoria = new SubCategoria;
        $subcategoria->update($request->input('name'),$request->input('description'),$request->input('status'),$request->input('category'),$id);
        return redirect()->action('Admin\SubcategoriaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategoria = new SubCategoria;
        $subcategoria->borrar($id);
        return redirect()->action('Admin\SubcategoriaController@index');
    }
}
