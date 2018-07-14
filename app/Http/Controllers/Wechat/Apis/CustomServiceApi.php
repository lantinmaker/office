<?php
/**
 * Created by PhpStorm.
 * User: Maker <maker68@163.com>
 * GITHUB: HerbCollins <http://github.com/herbcollins>
 * Date: 2018/7/14 0014
 * Time: 15:54
 */

namespace App\Http\Controllers\Wechat\Apis;


class CustomServiceApi extends BaseApi
{
    private static function getAccountAddUri()
    {
        if(self::IS_TEST)
            return "https://api.weixin.qq.com/customservice/kfaccount/add?access_token=" . self::ACCESS_TOKEN;
        else{
            $access_token = self::ACCESS_TOKEN;
            return "https://api.weixin.qq.com/customservice/kfaccount/add?access_token=" . $access_token;
        }
    }

    private static function getAccountUpdateUri()
    {
        if(self::IS_TEST)
            return "https://api.weixin.qq.com/customservice/kfaccount/update?access_token=" . self::ACCESS_TOKEN;
        else{
            $access_token = self::ACCESS_TOKEN;
            return "https://api.weixin.qq.com/customservice/kfaccount/update?access_token=" . $access_token;
        }
    }

    private static function getAccountDeleteUri()
    {
        if(self::IS_TEST)
            return "https://api.weixin.qq.com/customservice/kfaccount/del?access_token=" . self::ACCESS_TOKEN;
        else{
            $access_token = self::ACCESS_TOKEN;
            return "https://api.weixin.qq.com/customservice/kfaccount/del?access_token=" . $access_token;
        }
    }

    private static function getSendMessageUri()
    {
        if(self::IS_TEST)
            return "https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token=" . self::ACCESS_TOKEN;
        else{
            $access_token = self::ACCESS_TOKEN;
            return "https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token=" . $access_token;
        }
    }

    public static function addAccount($kf_account , $nickname , $password)
    {
        if(!$kf_account){
            throw new \Exception('请填写客服账号' , ErrorCode::CS_ACCOUNT_EMPTY);
        }

        if(!$nickname)
            throw new \Exception('请填写客服昵称' , ErrorCode::CS_NICKNAME_EMPTY);

        if(!$password)
            throw new \Exception('请填写客服密码' , ErrorCode::CS_NICKNAME_EMPTY);

        $post_data = json_encode([
            'kf_account' => $kf_account,
            'nickname' => $nickname,
            'password' => $password
        ]);

        $response = CurlUtil::post(self::getAccountAddUri() , $post_data);

        if(isset($response->errcode) && $response->errcode == 0){
            return true;
        }else{
            return false;
        }
    }

    public static function updateAccount($kf_account , $nickname , $password)
    {
        if(!$kf_account){
            throw new \Exception('请填写客服账号' , ErrorCode::CS_ACCOUNT_EMPTY);
        }

        if(!$nickname)
            throw new \Exception('请填写客服昵称' , ErrorCode::CS_NICKNAME_EMPTY);

        if(!$password)
            throw new \Exception('请填写客服密码' , ErrorCode::CS_NICKNAME_EMPTY);

        $post_data = json_encode([
            'kf_account' => $kf_account,
            'nickname' => $nickname,
            'password' => $password
        ]);

        $response = CurlUtil::post(self::getAccountUpdateUri() , $post_data);

        if(isset($response->errcode) && $response->errcode == 0){
            return true;
        }else{
            return false;
        }
    }

    public static function deleteAccount($kf_account , $nickname , $password)
    {
        if(!$kf_account){
            throw new \Exception('请填写客服账号' , ErrorCode::CS_ACCOUNT_EMPTY);
        }

        if(!$nickname)
            throw new \Exception('请填写客服昵称' , ErrorCode::CS_NICKNAME_EMPTY);

        if(!$password)
            throw new \Exception('请填写客服密码' , ErrorCode::CS_NICKNAME_EMPTY);

        $post_data = json_encode([
            'kf_account' => $kf_account,
            'nickname' => $nickname,
            'password' => $password
        ]);
        $response = CurlUtil::post(self::getAccountDeleteUri() , $post_data);

        if(isset($response->errcode) && $response->errcode == 0){
            return true;
        }else{
            return false;
        }
    }

    public static function text($openid , $content , $kf_account = null)
    {
        if(!$openid)
            throw new \Exception('OPEN_ID error' , ErrorCode::OPEN_ID_ERROR);

        if(!$content)
            throw new \Exception('MESSAGE_EMPTY' , ErrorCode::MESSAGE_EMPTY);



        if($kf_account !== null){
            $post_data = json_encode([
                'touser' => $openid,
                'msgtype' => 'text',
                'text' => [
                    'content' => $content,
                ],
                'customservice' => [
                    'kf_account' => $kf_account
                ]
            ]);
        }else{
            $post_data = json_encode([
                'touser' => $openid,
                'msgtype' => 'text',
                'text' => [
                    'content' => $content,
                ]
            ]);
        }

        $response = CurlUtil::post(self::getSendMessageUri() , $post_data);

        if(isset($response->errcode) && $response->errcode == 0){
            return true;
        }else{
            return false;
        }
    }

    public static function image($openid , $media_id , $kf_account = null)
    {
        if(!$openid)
            throw new \Exception('OPEN_ID error' , ErrorCode::OPEN_ID_ERROR);

        if(!$media_id)
            throw new \Exception('MEDIA ID ERROR' , ErrorCode::MEDIA_ID_ERROR);

        if($kf_account !== null){
            $post_data = json_encode([
                'touser' => $openid,
                'msgtype' => 'image',
                'image' => [
                    'media_id' => $media_id,
                ],
                'customservice' => [
                    'kf_account' => $kf_account
                ]
            ]);
        }else{
            $post_data = json_encode([
                'touser' => $openid,
                'msgtype' => 'image',
                'image' => [
                    'media_id' => $media_id,
                ]
            ]);
        }


        $response = CurlUtil::post(self::getSendMessageUri() , $post_data);

        if(isset($response->errcode) && $response->errcode == 0){
            return true;
        }else{
            return false;
        }
    }

    public static function voice($openid , $media_id , $kf_account = null)
    {
        if(!$openid)
            throw new \Exception('OPEN_ID error' , ErrorCode::OPEN_ID_ERROR);

        if(!$media_id)
            throw new \Exception('MEDIA ID ERROR' , ErrorCode::MEDIA_ID_ERROR);

        if(!$kf_account !== null){
            $post_data = json_encode([
                'touser' => $openid,
                'msgtype' => 'voice',
                'voice' => [
                    'media_id' => $media_id,
                ],
                'customservice' => [
                    'kf_account' => $kf_account
                ]
            ]);
        }else{
            $post_data = json_encode([
                'touser' => $openid,
                'msgtype' => 'voice',
                'voice' => [
                    'media_id' => $media_id,
                ]
            ]);
        }


        $response = CurlUtil::post(self::getSendMessageUri() , $post_data);

        if(isset($response->errcode) && $response->errcode == 0){
            return true;
        }else{
            return false;
        }
    }

    public static function video($openid , $media_id , $thumb_media_id , $title , $description , $kf_account = null)
    {
        if(!$openid)
            throw new \Exception('OPEN_ID error' , ErrorCode::OPEN_ID_ERROR);

        if(!$media_id)
            throw new \Exception('MEDIA ID ERROR' , ErrorCode::MEDIA_ID_ERROR);

        if($kf_account !== null){
            $post_data = json_encode([
                'touser' => $openid,
                'msgtype' => 'video',
                'video' => [
                    'media_id' => $media_id,
                    'thumb_media_id' => $thumb_media_id,
                    'title' => $title,
                    'description' => $description
                ],
                'customservice' => [
                    'kf_account' => $kf_account
                ]
            ]);
        }else{
            $post_data = json_encode([
                'touser' => $openid,
                'msgtype' => 'video',
                'video' => [
                    'media_id' => $media_id,
                    'thumb_media_id' => $thumb_media_id,
                    'title' => $title,
                    'description' => $description
                ]
            ]);
        }


        $response = CurlUtil::post(self::getSendMessageUri() , $post_data);

        if(isset($response->errcode) && $response->errcode == 0){
            return true;
        }else{
            return false;
        }
    }

    public static function music($openid , $title , $musicurl  , $description , $thumb_media_id, $hqmusicurl , $kf_account = null)
    {
        if(!$openid)
            throw new \Exception('OPEN_ID error' , ErrorCode::OPEN_ID_ERROR);

        if(!$musicurl)
            throw new \Exception('music url empty' , ErrorCode::MUSIC_URL_EMPTY);

        if($kf_account !== null){
            $post_data = json_encode([
                'touser' => $openid,
                'msgtype' => 'music',
                'music' => [
                    'title' => $title,
                    'thumb_media_id' => $thumb_media_id,
                    'musicurl' => $musicurl,
                    'description' => $description,
                    'hqmusicurl' => $hqmusicurl,
                ],
                'customservice' => [
                    'kf_account' => $kf_account
                ]
            ]);
        }else{
            $post_data = json_encode([
                'touser' => $openid,
                'msgtype' => 'music',
                'music' => [
                    'title' => $title,
                    'thumb_media_id' => $thumb_media_id,
                    'musicurl' => $musicurl,
                    'description' => $description,
                    'hqmusicurl' => $hqmusicurl,
                ]
            ]);
        }


        $response = CurlUtil::post(self::getSendMessageUri() , $post_data);

        if(isset($response->errcode) && $response->errcode == 0){
            return true;
        }else{
            return false;
        }
    }

    public static function news($openid , $articles , $kf_account = null)
    {
        if(!$openid)
            throw new \Exception('OPEN_ID error' , ErrorCode::OPEN_ID_ERROR);

        if(!$articles)
            throw new \Exception('Articles error' , ErrorCode::ARTICLES_ERROR);

        if($kf_account !== null){
            $post_data = json_encode([
                'touser' => $openid,
                'msgtype' => 'news' ,
                'news' => [
                    'articles' => $articles
                ],
                'customservice' => [
                    'kf_account' => $kf_account
                ]
            ]);
        }else{
            $post_data = json_encode([
                'touser' => $openid,
                'msgtype' => 'news' ,
                'news' => [
                    'articles' => $articles
                ]
            ]);
        }


        $response = CurlUtil::post(self::getSendMessageUri() , $post_data);

        if(isset($response->errcode) && $response->errcode == 0){
            return true;
        }else{
            return false;
        }
    }

    public static function mpnews($openid , $media_id , $kf_account = null)
    {
        if(!$openid)
            throw new \Exception('OPEN_ID error' , ErrorCode::OPEN_ID_ERROR);

        if(!$media_id)
            throw new \Exception('Media ID error' , ErrorCode::MEDIA_ID_ERROR);

        if($kf_account !== null){
            $post_data = json_encode([
                'touser' => $openid,
                'msgtype' => 'mpnews' ,
                'mpnews' => [
                    'media_id' => $media_id
                ],
                'customservice' => [
                    'kf_account' => $kf_account
                ]
            ]);
        }else{
            $post_data = json_encode([
                'touser' => $openid,
                'msgtype' => 'mpnews' ,
                'mpnews' => [
                    'media_id' => $media_id
                ]
            ]);
        }


        $response = CurlUtil::post(self::getSendMessageUri() , $post_data);

        if(isset($response->errcode) && $response->errcode == 0){
            return true;
        }else{
            return false;
        }
    }

    public static function wxcard($openid , $cardid , $kf_account = null)
    {
        if(!$openid)
            throw new \Exception('OPEN_ID error' , ErrorCode::OPEN_ID_ERROR);

        if(!$cardid)
            throw new \Exception('Card ID error' , ErrorCode::CARD_ID_ERROR);

        if($kf_account !== null){
            $post_data = json_encode([
                'touser' => $openid,
                'msgtype' => 'wxcard' ,
                'wxcard' => [
                    'card_id' => $cardid
                ],
                'customservice' => [
                    'kf_account' => $kf_account
                ]
            ]);
        }else{
            $post_data = json_encode([
                'touser' => $openid,
                'msgtype' => 'wxcard' ,
                'wxcard' => [
                    'card_id' => $cardid
                ],
            ]);
        }


        $response = CurlUtil::post(self::getSendMessageUri() , $post_data);

        if(isset($response->errcode) && $response->errcode == 0){
            return true;
        }else{
            return false;
        }
    }

    public static function miniprogrampage($openid , $title , $appid , $pagepath , $thumb_media_id , $kf_account = null)
    {
        if(!$openid)
            throw new \Exception('OPEN_ID error' , ErrorCode::OPEN_ID_ERROR);

        if(!$title)
            throw new \Exception('mini_program title empty' , ErrorCode::MINIPROGRAM_TITLE_EMPTY);

        if(!$appid)
            throw new \Exception('mini_program appid error' , ErrorCode::MINIPROGRAM_APPID_ERROR);

        if(!$pagepath)
            throw new \Exception('mini_program page path error' , ErrorCode::MINIPROGRAM_PAGE_PATH_ERROR);

        if($kf_account !== null){
            $post_data = json_encode([
                'touser' => $openid,
                'msgtype' => 'miniprogrampage' ,
                'miniprogrampage' => [
                    'title' => $title,
                    'appid' => $appid,
                    'pagepath' => $pagepath,
                    'thumb_media_id' => $thumb_media_id
                ],
                'customservice' => [
                    'kf_account' => $kf_account
                ]
            ]);
        }else{
            $post_data = json_encode([
                'touser' => $openid,
                'msgtype' => 'miniprogrampage' ,
                'miniprogrampage' => [
                    'title' => $title,
                    'appid' => $appid,
                    'pagepath' => $pagepath,
                    'thumb_media_id' => $thumb_media_id
                ],
            ]);
        }


        $response = CurlUtil::post(self::getSendMessageUri() , $post_data);

        if(isset($response->errcode) && $response->errcode == 0){
            return true;
        }else{
            return false;
        }
    }
}