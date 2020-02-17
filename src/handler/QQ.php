<?php


namespace fize\provider\oauth\handler;


use fize\provider\oauth\Oauth;


class QQ extends Oauth
{
    private $appid;

    private $appkey;

    private $isMobile = false;

    private $authorize_url_params = [];

    public function __construct($appid, $appkey, $redirect_uri = null, $is_mobile = null)
    {
        $this->appid = $appid;
        $this->appkey = $appkey;
        if (is_null($is_mobile)) {
            //为null时表示自动判断是否为手机访问
        } else {
            $this->isMobile = $is_mobile;
        }
    }

    /**
     * 设置Authorization Code链接的GET参数值，支持scope、display、g_ut
     * @param $key
     * @param $value
     */
    public function setAuthorizeUrlParams($key, $value)
    {
        $this->authorize_url_params[$key] = $value;
    }

    protected function getAuthorizationCodeUrl()
    {

    }

    protected function getAccessToken()
    {

    }

    protected function refreshAccessToken()
    {

    }
}
