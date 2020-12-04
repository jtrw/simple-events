<?php
namespace Jtrw\Events;

use Symfony\Contracts\EventDispatcher\Event;
use Jtrw\Events\Exceptions\EventSourceException;

/**
 * Class EventSource
 * @package Jtrw\Events
 */
class EventSource extends Event implements EventSourceInterface
{
    public array $target;
    
    /**
     * EventSource constructor.
     * @param array $dataTarget
     */
    public function __construct(array $dataTarget)
    {
        $this->target = $dataTarget;
    } // end __construct
    
    /**
     * @return array
     * @throws EventSourceException
     */
    public function getValues(): array
    {
        if (array_key_exists("values", $this->target)) {
            return $this->target["values"];
        }
        
        throw new EventSourceException("Values Not Found in Data");
    } // end getValues
    
    /**
     * @param array $values
     */
    public function saveValues(array $values)
    {
        $this->target["values"] = $values;
    } // end saveValues
    
    /**
     * @return array
     */
    public function getTarget(): array
    {
        return $this->target;
    } // end getData
}