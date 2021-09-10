<?php

namespace parallel;

/**
 * @see https://www.php.net/manual/en/class.parallel-runtime.php
 */
final class Runtime
{
    public function __construct(?string $bootstrap = null)
    {
    }

    /* Execute */

    /**
     * @return Future|null
     */
    public function run(\Closure $task, ?array $argv = null)
    {
    }

    /* Join */

    public function close(): void
    {
    }

    public function kill(): void
    {
    }
}
