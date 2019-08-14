<?php

namespace App\Repositories;

//use \Models\CustomsModels\UploadFiler;

// all, showOne, edit, delete
class Empresa //extends UploadFiler
{

    protected $token;

    public function __construct()
    {
        $this->token = env("API_XTAKE");
    }

    public function getEmpresa() {
	    $client = new \GuzzleHttp\Client();
	$response = $client->get(
            env('API_URL').'enterprises?token='.$this->token,
            array(
                'form_params' => array(
                    'token' => $this->token,
                )
            )
        );
        //dd(session('token'));
        $resp = json_decode($response->getBody()->getContents());
        if ($resp === NULL) {
            return NULL;
        }else {
            return $resp;
        }
    }

    public function setEmpresa($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k, $logo, $favicon, $img_principal){
        $client = new \GuzzleHttp\Client();

        //dd(count($this->getEmpresa()));
        
        // getEmpresa, si existe una modificar sino create

        if(count($this->getEmpresa())>0){
            $e = $this->getEmpresa();
            $response = $client->put(
                env('API_URL').'enterprises/'.$e[0]->_id.'?token='.$this->token,
                array(
                    'form_params' => array(
                        'name' => $a,
                        'moto' => $b,
                        'sub_moto' => $c,
                        'email' => $d,
                        'phone' => $e,
                        'address_detail' => $f,
                        'country' => $g,
                        'state' => $h,
                        'city' => $i,
                        'zip_code' => $j,
                        'cabecera_title' => $k,
                        'token' => $this->token,
                    )
                )
            ); 
            $response2 = $response; 
            $response = $this->getEmpresa();
            $json = json_decode($response[0]); 
	        $register_id = $json->_id;
            if (!is_null($logo)) {
                $this->imageLoader($logo,'enterprise','logo_url',$register_id); 
            }
            if (!is_null($favicon)) {
                $this->imageLoader($favicon,'enterprise','favicon',null);
            }
            if (!is_null($img_principal)) {
                $this->imageLoader($img_principal,'enterprise','img_principal',null);
            }
             $resp = json_decode($response2->getBody()->getContents());
        if ($resp === NULL) {
            return 1;
        }else {
            return 0;
        }


        }else {
            $response = $client->post(
                env('API_URL').'enterprises',
                array(
                    'form_params' => array(
                        'name' => $a,
                        'moto' => $b,
                        'email' => $d,
                        'phone' => $e,
                        'address_detail' => $f,
                        'country' => $g,
                        'state' => $h,
                        'city' => $i,
                        'zip_code' => $j,
                        'cabecera_title' => $k,
                        'token' => $this->token,
                    )
                )
            );

             $resp = json_decode($response->getBody()->getContents());
        if ($resp === NULL) {
            return 1;
        }else {
            return 0;
        }
        }
    }

    // Agilizar la carga hacerlo en segundo plano
    protected function imageLoader($img,$modelo,$campo,$id) {
        $client = new \GuzzleHttp\Client();
        $client->post(
            env('API_URL').'image-storag',
            array(
                'multipart' => [
                    [
                        'name'     => 'imagestorage',
                        'contents' => (!is_null($img) ? fopen($img->path(), 'r') : null)
                    ],
                    [
                        'name'     => 'model',
                        'contents' => $modelo
                    ],
                    [
                        'name'     => 'fd',
                        'contents' => $campo
                    ],
                    [
                        'name'     => 'id',
                        'contents' => $id
                    ]
                ]  
            )
        );  
    }
}
