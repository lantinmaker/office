<?php
/**
 * Created by PhpStorm.
 * User: Maker <maker68@163.com>
 * GITHUB: HerbCollins <http://github.com/herbcollins>
 * Date: 2018/7/14 0014
 * Time: 15:17
 */

namespace App\Http\Controllers\Wechat\Apis;


class CurlUtil
{
    public static function post($url , $post_data , $timeout = 30)
    {
        $curl = curl_init(); // 启动一个CURL会话
        curl_setopt($curl, CURLOPT_URL, $url); // 要访问的地址
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // 模拟用户使用的浏览器
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转
        curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
        curl_setopt($curl, CURLOPT_POST, 1); // 发送一个常规的Post请求
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data); // Post提交的数据包
        curl_setopt($curl, CURLOPT_TIMEOUT, $timeout); // 设置超时限制防止死循环
        curl_setopt($curl, CURLOPT_HEADER, 0); // 显示返回的Header区域内容
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回

        $response = json_decode(curl_exec($curl)); // 执行操作
        if (curl_errno($curl)) {
            throw new \Exception(curl_error($curl) , ErrorCode::CURL_ERROR);
        }

        curl_close($curl);
        return $response;
    }

    public static function get($url)
    {
        $curl = curl_init(); // 启动一个CURL会话
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($curl);     //返回api的json对象
        if (curl_errno($curl)) {
            throw new \Exception(curl_error($curl) , ErrorCode::CURL_ERROR);
        }
        //关闭URL请求
        curl_close($curl);
        return json_decode($response);    //返回json对象
    }
}