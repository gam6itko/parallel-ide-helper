<?php

namespace parallel;

/**
 * @see https://www.php.net/manual/en/class.parallel-sync.php
 */
final class Sync
{
    /* Constructor */

    /**
     * @param scalar $value
     */
    public function __construct($value)
    {
    }

    /* Access */
    /**
     * @return scalar
     */
    public function get()
    {
    }

    /**
     * @param scalar $value
     */
    public function set($value)
    {
    }

    /* Synchronization */
    public function wait()
    {
    }

    public function notify(bool $all)
    {
    }

    public function __invoke(callable $critical)
    {
    }
}
