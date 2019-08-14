<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Publicidad;

class PublicidadController extends Controller
{
    protected $publicidad;

    public function __construct(Publicidad $publicidad)
    {
        $this->middleware('auth');
        $this->publicidad = $publicidad;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar = $this->publicidad->all();
        foreach ($ar as $d) {
            $d->relevance = $d->relevance[0];
            if (!(property_exists($d, 'banner_url'))) {
                $d->banner_url = '/assets/app/img/img-placeholder-square-300x300.jpg';
            }
        }
        //dd($ar);
        return view('admin.adds', ['adds' => $ar]); 
    }

    public function store(Request $request)
    {  
        $publicidad = new Publicidad;
        $status = $publicidad->guardar($request->input('name'),$request->input('description'),$request->input('relevance'),$request->input('company'),$request->input('start_date'),$request->input('end_date'),$request->file('banner_url'));
        if ($status==1) {
            
        }else {

        }
        return redirect('/admin/publicidades');
    }

    /*public function bulkMail() {
        return view('admin.bulk_email'); 
    }

    public function manageMail() {
        $arr = array();
         //foreach(glob('*///emails_templates/*.*') as $filename){
           /* array_push($arr, $filename);
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
    }*/
}
