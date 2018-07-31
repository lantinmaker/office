<?php

namespace App\Http\Controllers\Wechat;

use App\Http\Controllers\Wechat\Apis\BaseApi;
use App\Http\Controllers\Wechat\Apis\MenuAPi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function __construct()
    {

    }



    public function index()
    {
        dd(MenuAPi::getMenu());
    }



}
