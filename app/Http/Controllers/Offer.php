<?php

namespace App\Http\Controllers;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class Offer extends Controller
{
  public function getdata ($id) {

    $client = new Client();
    $ban = $client->get('http://deepblue-001-site1.gtempurl.com/api/Product/List?HasOffer=true'.$id);
    $ban =  $ban->getBody()->getcontents();
    $ban = json_decode($ban , true);


    //return $ban;

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


//return $ban ;
    

  return view('offer',compact('ban','cate','branch','coll'));
 }
}

