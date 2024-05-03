<?php

namespace Laravel\Octane\Events;

use Laravel\Lumen\Application;
use Illuminate\Http\Request;

class RequestReceived
{
    public function __construct(
        public Application $app,
        public Application $sandbox,
        public Request $request
    ) {
    }
}
