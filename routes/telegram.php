<?php
/** @var SergiX44\Nutgram\Nutgram $bot */

use SergiX44\Nutgram\Nutgram;

/*
|--------------------------------------------------------------------------
| Nutgram Handlers
|--------------------------------------------------------------------------
|
| Here is where you can register telegram handlers for Nutgram. These
| handlers are loaded by the NutgramServiceProvider. Enjoy!
|
*/
$bot->middleware(\App\Telegram\Middleware\MyMiddleware::class);
$bot->onCommand('start', [\App\Telegram\Handlers\MainHandler::class, 'start']);
