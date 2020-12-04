<?php

namespace Jtrw\Events;

use Psr\EventDispatcher\StoppableEventInterface;

interface EventManagerInterface
{
    public function fireHook(string $name, array $data);
    public function dispatch(string $name, StoppableEventInterface $event);
    public function addListener(string $name, array $listener, int $priority = 0);
}