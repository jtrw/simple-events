<?php
namespace Jtrw\Events;
interface EventSourceInterface
{
    
    public function getValues(): array;
    public function saveValues(array $values);
    public function getTarget(): array;
}