<?php

namespace App\Handler;

use Spatie\WebhookClient\ProcessWebhookJob;

class WebhookHandler extends ProcessWebhookJob
{
    public function handler()
    {
        logger('I was here');
        logger($this->webhookCall);
    }
}
