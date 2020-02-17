<?php


namespace fize\provider\oauth;


abstract class Oauth
{
    abstract protected function getAuthorizationCodeUrl();

    abstract protected function getAccessToken();

    abstract protected function refreshAccessToken();
}
