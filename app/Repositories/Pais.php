<?php

namespace App\Repositories;

// all, showOne, edit, delete
class Pais
{

    protected $token;

    public function __construct()
    {
        $this->token = env("API_XTAKE");
    }

    public function all(){
        $client = new \GuzzleHttp\Client();
        $response = $client->get(
            env('API_URL').'countrys',
            array(
                'form_params' => array(
                    'token' => $this->token,
                )
            )
        );
        $resp = json_decode($response->getBody()->getContents());
        return $resp;
    }

    public function guardar($name, $code){
        $client = new \GuzzleHttp\Client();
        $response = $client->post(
            env('API_URL').'countrys',
            array(
                'form_params' => array(
                    'name' => $name,
                    'code' => $code,
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

    public function update($code, $name, $id) {
        $client = new \GuzzleHttp\Client();
        $response = $client->put(
            env('API_URL').'countrys/'.$id,
            array(
                'form_params' => array(
                    'name' => $name,
                    'code' => $code,
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
        $full_path = env('API_URL').'countrys/'.$id.'/?token='.$this->token;
        $response = $client->get($full_path);
        $resp = json_decode($response->getBody()->getContents());
        return $resp;
    }

    public function borrar($id) {
        $client = new \GuzzleHttp\Client();
        $response = $client->delete(env('API_URL').'countrys/'.$id,array('form_params' => array('token' => $this->token)));
        $resp = json_decode($response->getBody()->getContents());
        if ($resp === NULL) {
            return 1;
        }else {
            return 0;
        }     
    }
}
