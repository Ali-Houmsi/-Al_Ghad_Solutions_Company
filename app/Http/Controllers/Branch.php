<?php

namespace App\Http\Controllers;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class Branch extends Controller
{
    public function index()
    {
      $client = new Client();
        $branch = $client->get('http://deepblue-001-site1.gtempurl.com/api/Branch/List');
        $branch =  $branch->getBody()->getcontents();
        $branch = json_decode($branch , true);
 

               
        $client = new Client();
        $res = $client->get('http://deepblue-001-site1.gtempurl.com/api/Category/Get');
        $cate =  $res->getBody()->getcontents();
        $cate = json_decode($cate , true);


        $client = new Client();
        $branch = $client->get('http://deepblue-001-site1.gtempurl.com/api/Branch/List');
        $branch =  $branch->getBody()->getcontents();
        $branch = json_decode($branch , true);
  

     
        return view('branch' , compact('cate','branch'));

        
    
}
}
