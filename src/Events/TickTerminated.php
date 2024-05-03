<?php

namespace Laravel\Octane\Events;

use Laravel\Lumen\Application;
use Laravel\Octane\Contracts\OperationTerminated;

class TickTerminated implements OperationTerminated
{
    use HasApplicationAndSandbox;

    public function __construct(
        public Application $app,
        public Application $sandbox
    ) {
    }
}
