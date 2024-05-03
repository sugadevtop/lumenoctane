<?php

namespace Laravel\Octane\Events;

use Laravel\Lumen\Application;

class TickReceived
{
    public function __construct(
        public Application $app,
        public Application $sandbox
    ) {
    }
}
