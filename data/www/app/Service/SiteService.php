<?php

namespace App\Service;

use App\Entity\Site;

final class SiteService
{
    /**
     * @param string $site
     * @return Site
     * @throws \InvalidArgumentException
     */
    public function signUp(string $site): Site
    {
        try {
            $sql = 'INSERT INTO site (title, api_key, created_at) VALUES(:title, :api_key, :created_at)';

            return new Site($site, 'hello');
        } catch (\Throwable $exception) {
            throw new \InvalidArgumentException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
}
