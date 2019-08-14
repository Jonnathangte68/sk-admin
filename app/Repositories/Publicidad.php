<?php

namespace App\Repositories;

// all, showOne, edit, delete
class Publicidad
{
    protected $token;

    public function __construct()
    {
        $this->token = env("API_XTAKE");
    }

    public function all(){
        $client = new \GuzzleHttp\Client();
        $response = $client->get(
            env('API_URL').'publicidads',
            array(
                'form_params' => array(
                    'token' => $this->token,
                )
            )
        );
        $resp = json_decode($response->getBody()->getContents());
        return $resp;
    }

    public function guardar($name,$description,$relevance,$company,$start_date,$end_date,$img){
        $client = new \GuzzleHttp\Client();
        $response = $client->post(
            env('API_URL').'publicidads',
            array(
                'form_params' => array(
                    'name' => $name,
                    'description' => $description,
                    'relevance' => $relevance,
                    'company' => $company,
                    'start_date' => $start_date,
                    'end_date' => $end_date,
                    'token' => $this->token,
                )
            )
        );
        //dd($response->getBody()->getContents());
        $resp = json_decode($response->getBody()->getContents());
        $stored_id = $resp->_id; 
        $this->imageLoader($img,'add','imagen',$stored_id);
        if ($resp === NULL) {
        	return 1;
        }else {
        	return 0;
        }
    }

    public function update($name, $description, $status,$id) {
        $client = new \GuzzleHttp\Client();
        $response = $client->put(
            env('API_URL').'publicidads/'.$id,
            array(
                'form_params' => array(
                    'name' => $name,
                    'description' => $description,
                    'status' => $status,
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

    public function findOne($id){
        $client = new \GuzzleHttp\Client();
        $full_path = env('API_URL').'publicidads/'.$id.'/?token='.$this->token;
        $response = $client->get($full_path);
        $resp = json_decode($response->getBody()->getContents());
        return $resp;
    }

    public function borrar($id) {
        $client = new \GuzzleHttp\Client();
        $response = $client->delete(env('API_URL').'publicidads/'.$id,array('form_params' => array('token' => $this->token)));
        $resp = json_decode($response->getBody()->getContents());
        if ($resp === NULL) {
            return 1;
        }else {
            return 0;
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
