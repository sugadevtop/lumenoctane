<?php

namespace Laravel\Octane;

use Illuminate\Contracts\Events\Dispatcher;
use Laravel\Lumen\Application;
trait DispatchesEvents
{
    /**
     * Dispatch the given event via the given application.
     *
     * @param  mixed  $event
     */
    public function dispatchEvent(Application $app, $event): void
    {
        if ($app->bound(Dispatcher::class)) {
            $app[Dispatcher::class]->dispatch($event);
        }
    }
}
