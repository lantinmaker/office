<?php

namespace App\Http\Controllers\Admin\Wechat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class ConfigController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('admin.wechat.config');
    }

    public function save(Request $request)
    {
        try{
            $all = $request->all();


        }catch (\Exception $e){
            Log::error("[Admin/Wechat/ConfigController@save] error in line: (" .$e->getLine() .") ; Message: " .$e->getMessage() , $e->getCode() );
            return response()->json([
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ]);
        }
    }
}
