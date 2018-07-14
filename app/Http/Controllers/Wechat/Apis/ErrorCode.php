<?php
/**
 * Created by PhpStorm.
 * User: Maker <maker68@163.com>
 * GITHUB: HerbCollins <http://github.com/herbcollins>
 * Date: 2018/7/14 0014
 * Time: 15:02
 */

namespace App\Http\Controllers\Wechat\Apis;


class ErrorCode
{
    const OPEN_ID_ERROR = 10001;
    const MESSAGE_EMPTY = 10002;
    const MEDIA_ID_ERROR = 10003;
    const MUSIC_URL_EMPTY = 10004;
    const CARD_ID_ERROR = 10005;
    const ARTICLES_ERROR = 10006;
    const MINIPROGRAM_APPID_ERROR = 10007;
    const MINIPROGRAM_PAGE_PATH_ERROR = 10008;
    const MINIPROGRAM_TITLE_EMPTY = 10009;


    const CS_ACCOUNT_EMPTY = 20001;
    const CS_NICKNAME_EMPTY = 20002;
    const CS_PASSWORD_EMPTY = 20003;

    const CURL_ERROR = 30001;
    const SET_MENU_FAIED = 30002;
}