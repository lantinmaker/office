<?php
/**
 * Created by PhpStorm.
 * User: Maker <maker68@163.com>
 * GITHUB: HerbCollins <http://github.com/herbcollins>
 * Date: 2018/7/14 0014
 * Time: 14:49
 */

namespace App\Http\Controllers\Wechat\Apis;


use Illuminate\Support\Facades\Log;

class BaseApi
{

    const IS_TEST = true;

    const TOKEN = "lantinmaker";

    const APPID = "wx41917497fb7fe6ff";
    const APPSECRET = "efd413d52236be0d000adc2e2eb3a103";

    const TEST_APPID = "wxee17588f0c9cf314";
    const TEST_APPSECRET = "f2fb53e79a3354298f2eb4009b3ca9fd";

    const ACCESS_TOKEN = "11_Myse2maFINOS86Fjf1UFGiiGA1RnuFo52S9ATAb6tMu3hbuV75xhbH4wEgNb5qMBf25ht9PyDaYm6c5aWRnvryHQ2DBLXVJn760UlbUlLJTS3tx8nPJcGPeG__UWOJdAEAIAV";


    private static function getAccessTokenUri()
    {
        if(self::IS_TEST)
            return "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=". self::TEST_APPID ."&secret=" .self::TEST_APPSECRET;
        else
            return "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=". self::APPID ."&secret=" .self::APPSECRET;
    }

    private static function getWechatIpUri()
    {
        if(self::IS_TEST){
            return "https://api.weixin.qq.com/cgi-bin/getcallbackip?access_token=" .self::ACCESS_TOKEN;
        }else{
            $access_token = self::ACCESS_TOKEN;
            return "https://api.weixin.qq.com/cgi-bin/getcallbackip?access_token=" . $access_token;
        }
    }

    public function getAccessToken()
    {
        if(self::IS_TEST){
            return self::ACCESS_TOKEN;

        }else{
            $ch = curl_init();

            curl_setopt($ch , CURLOPT_URL , self::getAccessTokenUri());
            curl_setopt($ch , CURLOPT_RETURNTRANSFER , 1);

            $data = json_decode(curl_exec($ch));

            curl_close($ch);

            if(isset($data->access_token)){
                return $data->access_token;
            }else{
                return false;
            }
        }


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

    /**
     * 获取微信服务器IP列表
     *
     * @return bool
     * @author Maker <maker68@163.com>
     */
    public static function getWechatIP()
    {
        $response = CurlUtil::get(self::getWechatIpUri());
        if(isset($response->ip_list)){
            return $response->ip_list;
        }else{
            return false;
        }
    }

}