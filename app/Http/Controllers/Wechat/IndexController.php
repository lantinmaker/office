<?php

namespace App\Http\Controllers\Wechat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    const TOKEN = "lantinmaker";

    public function __construct()
    {

    }

    public function checkSignature($signature , $timestamp , $nonce)
    {
        $tmpArr = array(self::TOKEN , $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $signature  === $tmpStr){
            return true;
        }else{
            return false;
        }
    }

    public function index(Request $request)
    {

        $signature = $request->get('signature');
        $timestamp = $request->get('timestamp');
        $nonce = $request->get('nonce');

        if($this->checkSignature($signature , $timestamp , $nonce)){
            return $request->get('echostr');
        }else{
            return 0;
        }
    }
}
