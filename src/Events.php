<?php

namespace parallel;

/**
 * @see https://www.php.net/manual/en/class.parallel-events.php
 */
final class Events
{
    /* Input */
    
    public function setInput(Input $input): void
    {
    }

    /* Targets */

    public function addChannel(Channel $channel): void
    {
    }

    public function addFuture(string $name, Future $future): void
    {
    }

    public function remove(string $target): void
    {
    }

    /* Behaviour */
    public function setBlocking(bool $blocking): void
    {
    }

    public function setTimeout(int $timeout): void
    {
    }

    /* Polling */

    /**
     * @return parallel\Events\Event|null
     */
    public function poll()
    {
    }
}
