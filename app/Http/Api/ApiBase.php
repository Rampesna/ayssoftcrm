<?php


namespace App\Http\Api;

use Illuminate\Support\Facades\Http;

abstract class ApiBase
{

    public $baseUrl;
    public $_token;

    public function callApi($url, $method, $headers = [], $params = [])
    {
        return Http::withHeaders($headers)->$method($url, $params);
    }
}
