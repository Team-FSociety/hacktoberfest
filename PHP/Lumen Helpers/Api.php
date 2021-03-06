<?php

namespace App\Helper;
use Illuminate\Support\Facades\Http;

class Api{

    private static function base(){
        return "http://some-url.com/";
    }

    public static function get($reqPath, $data=''){
        $path  = $this->bath($reqPath);

        $response = Http::get($path, $data);
        $result   = json_decode($response->body());

        return $result->data;
    }

    public static function post($reqPath, $data){
        $path  = $this->bath($reqPath);
        
        $response = Http::post($path, $data);
        $result   = json_decode($response->body());

        return $result->data;
    }
    private function bath($reqPath){
        return Api::base().''.$reqPath;
    }

}
