<?php

namespace App\Http\Controllers;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class Product extends Controller
{
    public function index($id = 1)
    {
      $client = new Client();
        $pro = $client->get('http://deepblue-001-site1.gtempurl.com/api/Product/List?PageSize=100&categoryId='.$id);
        $pro =  $pro->getBody()->getcontents();
        $pro = json_decode($pro , true);
        //ban definition should be here I can't find it in this file
        $ban = $client->get('http://deepblue-001-site1.gtempurl.com/api/Photo/Slider');
        $ban =  $ban->getBody()->getcontents();
        $ban = json_decode($ban , true);

        $client1 = new Client();
        $coll = $client1->get('http://deepblue-001-site1.gtempurl.com/api/Product/List?PageSize=300&IsNew=true');
        $coll =  $coll->getBody()->getcontents();
        $coll = json_decode($coll , true);


     $client = new Client();
     $res = $client->get('http://deepblue-001-site1.gtempurl.com/api/Category/Get');
     $cate =  $res->getBody()->getcontents();
     $cate = json_decode($cate , true);


     $client = new Client();
     $branch = $client->get('http://deepblue-001-site1.gtempurl.com/api/Branch/List');
     $branch =  $branch->getBody()->getcontents();
     $branch = json_decode($branch , true);



     return view('product' , compact('cate','branch', 'pro', 'ban', 'coll'));



}

public function allprod()
{
  $ids = '1';

  if($ids != '0ce6a918-0b1b-4f6d--08d8138313d7'){
  $client = new Client();
  $pro = $client->get('http://deepblue-001-site1.gtempurl.com/api/Product/List?PageSize=600&categoryId=');
  $pro =  $pro->getBody()->getcontents();
  $pro = json_decode($pro , true);


     $client = new Client();
     $res = $client->get('http://deepblue-001-site1.gtempurl.com/api/Category/Get');
     $cate =  $res->getBody()->getcontents();
     $cate = json_decode($cate , true);


     $client = new Client();
     $branch = $client->get('http://deepblue-001-site1.gtempurl.com/api/Branch/List');
     $branch =  $branch->getBody()->getcontents();
     $branch = json_decode($branch , true);

     return view('shoes' , compact('cate','branch' , 'pro'  ));

  }
}



 }
