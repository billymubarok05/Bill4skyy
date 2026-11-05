<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Vercel PHP Entry Point
|--------------------------------------------------------------------------
*/

$portfolio = dirname(__DIR__) . '/index.php';

if (!is_file($portfolio)) {

    http_response_code(500);

    echo '<h1>500</h1>';
    echo '<p>Portfolio index.php tidak ditemukan.</p>';

    exit;

}

require $portfolio;