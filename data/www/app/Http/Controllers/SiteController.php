<?php

namespace App\Http\Controllers;

use App\Service\SiteService;

class SiteController extends Controller
{
    public function add(string $title)
    {
        try {
            $site = (new SiteService())->signUp($title);
            return [
                'data' => [
                    'api_key' => $site->getApiKey(),
                ],
            ];
        } catch (\InvalidArgumentException $exception) {
            return [
                'error' => [
                    'message' => $exception->getMessage(),
                    'code' => $exception->getCode(),
                ],
            ];
        }
    }
}
