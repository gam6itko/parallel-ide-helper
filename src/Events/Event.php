<?php

namespace parallel\Events;

/**
 * @see https://www.php.net/manual/en/class.parallel-events-event.php
 */
final class Event
{
    /**
     * Shall be one of Event\Type constants
     *
     * @var int 
     */
    public $type;
    
    /**
     * Shall be the source of the event (target name)
     *
     * @var string 
     */
    public $source;
    
    /**
     * Shall be either Future or Channel
     *
     * @var $object 
     */
    public $object;
    
    /**
     * Shall be set for Read/Error events 
     */
    public $value;
}
