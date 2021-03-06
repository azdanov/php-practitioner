<?php

/**
 * Require a view.
 *
 * @param string $name
 * @param array  $data
 *
 * @return string
 */
function view($name, array $data = []): string
{
    extract($data, EXTR_OVERWRITE);

    return require dirname(__DIR__)."/app/views/{$name}.view.php";
}

/**
 * Redirect to a new page.
 *
 * @param string $path
 */
function redirect($path): void
{
    header("Location: /{$path}");
}
