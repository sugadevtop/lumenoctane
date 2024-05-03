<?php

namespace Laravel\Octane\Events;

use Laravel\Lumen\Application;

class TaskReceived
{
    public function __construct(
        public Application $app,
        public Application $sandbox,
        public $data
    ) {
    }
}
