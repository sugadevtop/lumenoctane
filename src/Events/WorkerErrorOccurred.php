<?php

namespace Laravel\Octane\Events;

use Laravel\Lumen\Application;
use Throwable;

class WorkerErrorOccurred
{
    public function __construct(public Throwable $exception, public Application $sandbox)
    {
    }
}
