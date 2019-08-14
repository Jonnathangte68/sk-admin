<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\ContentTextArea;
use App\Repositories\Pagina;

class WebsiteAdmin extends Controller
{
    protected $content_text_area;
    protected $pagina;

    public function __construct(ContentTextArea $cta, Pagina $page)
    {
        $this->middleware('auth');
        $this->content_text_area = $cta;
        $this->pagina = $page;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.website_style_management', []);
    }

    public function create(Request $request){

    }

    public function edit(Request $request, $id) {

    }

    public function pagesAll() {
        return view('admin.list_pages', []);
    }

    public function editPage(Request $request, $page) {
        $p = new Pagina();
        $client = new \GuzzleHttp\Client();
        $full_path = 'http://localhost:3002/pages/'.$page.'/?token='.session('token');
        //dd($full_path);
        $response = $client->get($full_path);
        $resp = json_decode($response->getBody()->getContents());
        if (!empty($resp)) {
            return view('admin.about_us_mirror', ['name' => $resp->name, 'html' => $resp->html, 'css' => $resp->css]);
        }
        return view('admin.about_us_mirror', ['name' => $page, 'html' => "", 'css' => ""]);
    }

    public function replaceCont(Request $request) {
        $data = $request->all();
        $page = new Pagina();
        // page, html, css
        $status = 0;
        $status = $page->createOrUpdatePage($data['page'], $data['new_content'], $data['style']);
        if (intval($status)===1) {
            return json_encode(array('status'=> 1));
        } else {
            return json_encode(array('status'=> 0));
        }
    }
}
