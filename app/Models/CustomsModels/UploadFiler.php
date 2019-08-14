<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadFiler extends Model
{

	public function __construct(){
    	// Nothing to construct...
    }

	public function uploadFile($img,$modelo,$campo,$id) {
		$this->imageLoader($img,'enterprise','logo_url',$id);
	}
    
    // Agilizar la carga hacerlo en segundo plano
    protected function imageLoader($img,$modelo,$campo,$id) {
        $client = new \GuzzleHttp\Client();
        $client->post(
            'http://localhost:3002/image-storag',
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
