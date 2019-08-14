<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Empresa;

class EmpresaController extends Controller
{
    public function index() {
    	// Si no hay empresa formulario para crear
    	// Sino formulario con datos
        $empresa = new Empresa;
        $e = $empresa->getEmpresa();
        if ($e && $e != null) {
            $e = $e[0];
            return view('admin.enterprise_gestion')->with('e',$e);   
        }
        return view('admin.create_enterprise');  
    }

    public function update(Request $request) {
    	// Si no hay empresa formulario para crear
    	// Sino formulario con datos
    	//return view('admin.enterprise_gestion')->with('e',1);
    	$empresa = new Empresa;
        $e = $empresa->setEmpresa(
            $request->input('name'),
            $request->input('moto'),
            $request->input('sub_moto'),
            $request->input('email'),
            $request->input('phone'),
            $request->input('address_detail'),
            $request->input('country'),
            $request->input('state'),
            $request->input('city'),
            $request->input('zip_code'),
            $request->input('cabecera_title'),
            $request->file('logo_url'),
            $request->file('favicon'),
            $request->file('img_principal')
        );
        $request->session()->flash('status', 'Transacción realizada exitosamente!');
        return redirect()->route('admin.enterprise');
    }

    public function back() {
        return redirect()->back();
    }
}
