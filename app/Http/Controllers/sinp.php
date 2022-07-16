<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
 class sinp extends Controller
{
   
     public function index($id)
     {

             
    $client = new Client();
    $res = $client->get('http://deepblue-001-site1.gtempurl.com/api/Category/Get');
    $cate =  $res->getBody()->getcontents();
    $cate = json_decode($cate , true);


    $client = new Client();
    $branch = $client->get('http://deepblue-001-site1.gtempurl.com/api/Branch/List');
    $branch =  $branch->getBody()->getcontents();
    $branch = json_decode($branch , true);


    
        $client = new Client();
        $prod = $client->get('http://deepblue-001-site1.gtempurl.com/api/Product/GetById/'.$id);
        $prod =  $prod->getBody()->getcontents();
        $prod = json_decode($prod , true);

        

        return view('singp' , compact('cate','branch' , 'prod' ));
     }


     


}