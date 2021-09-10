<?php

namespace parallel;

class Channel
{
    /* Constant for Infinitely Buffered */
    public const Infinite = -1;

    /* Anonymous Constructor */

    public function __construct(?int $capacity = null)
    {
    }

    /* Access */

    /**
     * @return Channel
     */
    public function make(string $name, ?int $capacity = null)
    {
    }

    /**
     * @return Channel
     */
    public function open(string $name)
    {
    }

    /* Sharing */

    /**
     * @return mixed
     */
    public function recv()
    {
    }

    /**
     * @param mixed $value
     */
    public function send($value): void
    {
    }

    /* Closing */

    public function close(): void
    {
    }
}
