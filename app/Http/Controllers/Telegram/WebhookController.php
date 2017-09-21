<?php

namespace App\Http\Controllers\Telegram;

use Illuminate\Http\Request;

class WebhookController
{
    public function processEvent(Request $request)
    {
        $request->input();
    }
}