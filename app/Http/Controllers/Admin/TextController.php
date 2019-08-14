<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\ContentTextArea;

class TextController extends Controller
{
    protected $content_text_area;

    public function __construct(ContentTextArea $cta)
    {
        $this->middleware('auth');
        $this->content_text_area = $cta;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cta = new ContentTextArea;
        $fcta = array();
        //dd($cta->all());
        $hashmap = array();
        $v = 1;
        while($v < 264) {
            if (array_key_exists(($v-1), $cta->all())) {
                $s = 'title'.(string)$v;
                $hashmap[$s] = $cta->all()[($v-1)]->text;   
            }else {
                $s = 'title'.(string)$v;
                $hashmap[$s] = ' ';   
            }
            
            $v++;
        }



        return view('admin.text_management', ['hashmap'=>$hashmap]);


    }

    public function create(Request $request){
        $cta = new ContentTextArea;



        $r = array();

        for ($i=1; $i < 264 ; $i++) { 
            $string = 'title'.(string)$i;

            if ($request->input($string) && $request->input($string)!="") {
                $r[$string] = $request->input($string);
            }else {
                $r[$string] = ' ';
            }
        }

        $cta->guardar($r);

        return redirect()->action('Admin\TextController@index');
    }

    public function edit(Request $request, $id) {
        //dd($id);
        return view('admin.edit_text');
    }
}
