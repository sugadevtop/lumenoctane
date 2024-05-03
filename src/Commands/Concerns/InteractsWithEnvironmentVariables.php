<?php

namespace Laravel\Octane\Commands\Concerns;

use Dotenv\Exception\InvalidPathException;
use Dotenv\Parser\Parser;
use Dotenv\Store\StoreBuilder;
use Illuminate\Support\Env;

trait InteractsWithEnvironmentVariables
{
    /**
     * Forgets the current process environment variables.
     *
     * @return void
     */
    public function forgetEnvironmentVariables()
    {
        $variables = collect();

        try {
            $content = StoreBuilder::createWithNoNames()
                ->addPath(base_path())
                ->addName('.env')
                ->make()
                ->read();

            foreach ((new Parser())->parse($content) as $entry) {
                $variables->push($entry->getName());
            }
        } catch (InvalidPathException $e) {
            // ..
        }

        $variables->each(fn ($name) => Env::getRepository()->clear($name));
    }
}
