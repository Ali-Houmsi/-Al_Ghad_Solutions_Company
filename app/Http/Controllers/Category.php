<?php

namespace App\Http\Controllers;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;


class Category extends Controller
{


    
    public function index()
    {
      $client = new Client();
        $res = $client->get('http://deepblue-001-site1.gtempurl.com/api/Category/Get');
        $cate =  $res->getBody()->getcontents();
        $cate = json_decode($cate , true);
          return view('category', compact('cate'));
    
}


public function categorysh()
{
  $client = new Client();
    $res = $client->get('http://deepblue-001-site1.gtempurl.com/api/Category/Get');
    $cate =  $res->getBody()->getcontents();
    $cate = json_decode($cate , true);
      return view('category_sh', compact('cate'));

}

}   