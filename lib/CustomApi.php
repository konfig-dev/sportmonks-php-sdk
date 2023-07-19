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
        $uri = $request->getUri();
        $path = $uri->getPath();
        $path = str_ireplace("%7Bversion%7D", $configuration->getVersion(), $path);
        $path = str_ireplace("%7Bsport%7D", $configuration->getSport(), $path);
        $request = $request->withUri($uri->withPath($path));
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
