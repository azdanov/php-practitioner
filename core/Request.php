<?php

namespace App\Core;

/**
 * Class Request.
 */
class Request
{
    /**
     * Fetch the request URI.
     *
     * @return string
     *
     * @SuppressWarnings("super")
     */
    public static function uri(): string
    {
        /** @var $path string|bool|null parsed url path */
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        return trim(
            $path,
            '/'
        );
    }

    /**
     * Fetch the request method.
     *
     * @return string
     *
     * @SuppressWarnings("super")
     */
    public static function method(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
