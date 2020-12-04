<?php

class PreparedData
{
    public const TEST_USER_NAME = "Test User";
    
    public function doPrepareData(\Jtrw\Events\EventSourceInterface $eventSource)
    {
        $target = $eventSource->getTarget();

        $target['values']['name'] = static::TEST_USER_NAME;
    }
}