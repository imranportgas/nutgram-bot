<?php
/** @var SergiX44\Nutgram\Nutgram $bot */

use App\Telegram\Conversations\CreateProfile;
use App\Telegram\Handlers\PhotoHandler;
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
$bot->onCallbackQueryData('createProfile',\App\Telegram\Conversations\CreateProfile::class);

$bot->onPhoto([PhotoHandler::class, 'photo']);
$bot->onCallbackQuery('secondStep', [CreateProfile::class,'secondStep']);
