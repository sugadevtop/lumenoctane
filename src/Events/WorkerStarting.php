<?php

namespace Laravel\Octane\Events;

use Laravel\Lumen\Application;

class WorkerStarting
{
    public function __construct(public Application $app)
    {
    }
}
