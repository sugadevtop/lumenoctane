<?php

namespace Laravel\Octane\Events;

use Laravel\Lumen\Application;

class WorkerStopping
{
    public function __construct(public Application $app)
    {
    }
}
