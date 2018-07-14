<?php
/**
 * Created by PhpStorm.
 * User: Maker <maker68@163.com>
 * GITHUB: HerbCollins <http://github.com/herbcollins>
 * Date: 2018/7/14 0014
 * Time: 15:46
 */

namespace App\Http\Controllers\Wechat\Apis;



use Illuminate\Support\Facades\Log;

class MenuAPi extends BaseApi
{

    private static function getMenuSetUri()
    {
        if(self::IS_TEST)
            return "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=" . self::ACCESS_TOKEN;
        else{
            $access_token = self::ACCESS_TOKEN;
            return "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=" . $access_token;
        }
    }

    private static function getMenuGetUri()
    {
        if(self::IS_TEST)
            return "https://api.weixin.qq.com/cgi-bin/menu/get?access_token=" . self::ACCESS_TOKEN;
        else{
            $access_token = self::ACCESS_TOKEN;
            return "https://api.weixin.qq.com/cgi-bin/menu/get?access_token=" . $access_token;
        }
    }

    private static function getMenuDeleteUri()
    {
        if(self::IS_TEST)
            return "https://api.weixin.qq.com/cgi-bin/menu/delete?access_token=" . self::ACCESS_TOKEN;
        else{
            $access_token = self::ACCESS_TOKEN;
            return "https://api.weixin.qq.com/cgi-bin/menu/delete?access_token=" . $access_token;
        }
    }

    public static function setMenu($menuData)
    {
        $response = CurlUtil::post(self::getMenuSetUri() , $menuData);

        if(isset($response->errcode) && $response->errcode === 0){

            Log::info("[Wechat/Apis@setMenu] Menu reset success ,new menu is :" . json_encode($menuData) );
            return true;
        }else{
            Log::info("[Wechat/Apis@setMenu] Menu reset failed ,the new menu what plan to set is :" . json_encode($menuData) );
            throw new \Exception('Menu reset failed' , ErrorCode::SET_MENU_FAIED);
        }
    }

    public static function getMenu()
    {
        return CurlUtil::get(self::getMenuGetUri());
    }

    public static function deleteMenu()
    {
        return CurlUtil::get(self::getMenuDeleteUri());
    }
}