<?php


namespace Jtrw\Events;


interface QueueInterface
{
    public function add(object $job);
}