<?php


namespace fize\oauth;


abstract class Oauth
{
    abstract protected function getAuthorizationCodeUrl();

    abstract protected function getAccessToken();

    abstract protected function refreshAccessToken();
}