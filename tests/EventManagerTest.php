<?php

include_once "Resources/PreparedData.php";

class EventManagerTest extends \PHPUnit\Framework\TestCase
{
    public function testChangeDataByEventHook()
    {
        $event = new \Jtrw\Events\EventManager();
    
        $event->addListener("testHook", [new PreparedData(), 'doPrepareData']);
        
        $values = [
            'name' => 'Hello'
        ];
        
        $target = [
            'values' => &$values
        ];
        
        $event->fireHook("testHook", $target);
        
        $this->assertEquals(PreparedData::TEST_USER_NAME, $target['values']['name']);
    } // end testChangeDataByEventHook
}