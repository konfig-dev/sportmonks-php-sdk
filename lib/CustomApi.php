<?php

namespace Sportmonks;

class CustomApi
{

    public function beforeSendHook(
        \GuzzleHttp\Psr7\Request &$request,
        \Sportmonks\RequestOptions $requestOptions,
        \Sportmonks\Configuration $configuration,
        $body = null
    ) {
    }

    public function beforeCreateRequestHook(
        string &$method,
        string &$resourcePath,
        array &$queryParams,
        array &$headers,
        &$httpBody
    ) {
    }
}
