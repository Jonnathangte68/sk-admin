<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\SubCategoria;
use App\Repositories\Categoria;

class EmailController extends Controller
{
    //protected $subcategoria;

    public function __construct(Subcategoria $subcategoria)
    {
        $this->middleware('auth');
        //$this->subcategoria = $subcategoria;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.csubcategoria'); 
    }

    public function bulkMail() {
        return view('admin.bulk_email'); 
    }

    public function manageMail() {
        $arr = array();
         foreach(glob('*/emails_templates/*.*') as $filename){
            array_push($arr, $filename);
         }
         //dd($arr);
        return view('admin.table_email', ['fls' => $arr]);    
    }

    public function manageTemplate(Request $request) {
        return view('admin.template_creator_email'); 
    }

    public function storenewemailtemplate(Request $request) {
        //dd($request);
        $base = 'assets/emails_templates/';
        file_put_contents ( $base.$request->input('filename').".html" , $request->input('html') );
        return json_encode(array('status' => 1));
        //return view('admin.template_creator_email', ['saved'=>'1']); 
    }

    public function storeconfig(Request $request) {
        //dd($request);
        $base = "assets/emails_templates/";
        if (!empty($request->input('login_emout'))) {
            rename($request->input('login_emout'), $base.'login_template.html');
        }
        if (!empty($request->input('subscribe_emout'))) {
            rename($request->input('login_emout'), $base.'subscribe_template.html');
        }
        if (!empty($request->input('recovery_emout'))) {
            rename($request->input('login_emout'), $base.'recovery_template.html');
        }
        if (!empty($request->input('contact_emout'))) {
            rename($request->input('login_emout'), $base.'contact_template.html');
        }
        return redirect('/admin/mail-management');
    }
}
