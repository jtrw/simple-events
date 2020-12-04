<?php
namespace Jtrw\Events;

use Psr\EventDispatcher\StoppableEventInterface;
use Symfony\Component\EventDispatcher\EventDispatcher;

class EventManager implements EventManagerInterface
{
    protected EventDispatcher $dispatcher;
    
    public function __construct()
    {
        $this->dispatcher = new EventDispatcher();
    } // end __construct
    
    public function fireHook(string $name, array $data)
    {
        $event = new EventSource($data);
        
        $this->dispatch($name, $event);
    } // end fireHook
    
    public function dispatch(string $name, StoppableEventInterface $event)
    {
        $this->dispatcher->dispatch($event, $name);
    } // end dispatch
    
    public function addListener(string $name, array $listener, int $priority = 0)
    {
        $this->dispatcher->addListener($name, $listener, $priority);
    } // end addListener
}