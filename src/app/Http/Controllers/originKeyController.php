<?php

namespace App\Http\Controllers;

use cotoflux\site_test\SiteAPIClient;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;


class originKeyController extends Controller
{


    public function keyresponse(){

        $sendResponse = new SiteAPIClient();
        $response = $sendResponse->sendResponseToCoreApi();

        if($response){
            return $response;
        }else{
            return "false";
        }

    }

    public function userresponse(){

        $response = Storage::get('recievedUser');
 
        if($response){
            return $response;
        }else{
            return "false";
        }

    }

    public function passwordresponse(){

        $response = Storage::get('recievedPassword');

        if($response){
            return $response;
        }else{
            return "false";
        }

    }

    protected function loadRoutesFrom($path)
    {
        if (! $this->app->routesAreCached()) {
            require $path;
        }
    }    
}
