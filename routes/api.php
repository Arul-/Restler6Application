<?php


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. If your api
| server supports it
|
*/

use App\Http\Controllers\Home;
use Luracast\Restler\OpenApi3\Explorer;
use Luracast\Restler\Routes;

try {
    Routes::mapApiClasses(
        [
            '' => Home::class,
            Explorer::class,
        ]
    );
} catch (Throwable $throwable) {
    echo $throwable->getMessage() . PHP_EOL;
}
