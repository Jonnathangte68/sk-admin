<?php

namespace App\Repositories;

// all, showOne, edit, delete
class Pagina
{

    protected $token;

    public function __construct()
    {
        $this->token = env("API_XTAKE");
    }

    public function all() {
        $client = new \GuzzleHttp\Client();
        $response = $client->get(
            env('API_URL').'pages',
            array(
                'form_params' => array(
                    'token' => $this->token,
                )
            )
        );
        $resp = json_decode($response->getBody()->getContents());
        return $resp;
    }

    public function guardar($name, $description, $status) {
        $client = new \GuzzleHttp\Client();
        $response = $client->post(
            env('API_URL').'pages',
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

    public function update($name, $description, $status,$id) {
        $client = new \GuzzleHttp\Client();
        $response = $client->put(
            env('API_URL').'pages/'.$id,
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

    public function findOne($id) {
        $client = new \GuzzleHttp\Client();
        $full_path = env('API_URL').'pages/'.$id.'/?token='.$this->token;
        $response = $client->get($full_path);
        $resp = json_decode($response->getBody()->getContents());
        return $resp;
    }

    public function findOneByName($name) {
        $client = new \GuzzleHttp\Client();
        $full_path = env('API_URL').'pagesByName/'.$name;
        //dd($full_path);
        $response = $client->get($full_path);
        $resp = json_decode($response->getBody()->getContents());
        return $resp;
    }

    public function createOrUpdatePage($page, $html, $css) {
        $client = new \GuzzleHttp\Client();
        $response = $client->post(
            env('API_URL').'pages',
            array(
                'form_params' => array(
                    'name' => $page,
                    'html' => $html,
                    'css' => $css,
                    'token' => $this->token,
                )
            )
        );
        $resp = json_decode($response->getBody()->getContents());
        if ($resp === NULL) {return 0;} else {return 1;}
    }

    public function borrar($id) {
        $client = new \GuzzleHttp\Client();
        $response = $client->delete(env('API_URL').'pages/'.$id,array('form_params' => array('token' => $this->token)));
        $resp = json_decode($response->getBody()->getContents());
        if ($resp === NULL) {
            return 1;
        }else {
            return 0;
        }
    }
}
