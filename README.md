# Events

Wrapper for symfony Event

## Structure Events

* EventManager
* EventSource


## Install

Via Composer

``` bash
$ composer require jtrw/simple-events
```

## Usage EvenManager

```php
class PreparedData
{
    public const TEST_USER_NAME = "Test User";
    
    public function doPrepareData(\Jtrw\Events\EventSource $eventSource)
    {
        $target = $eventSource->getTarget();

        $target['values']['name'] = static::TEST_USER_NAME;
    }
}
$event = new \Jtrw\Events\EventManager();

$event->addListener("testHook", [new PreparedData(), 'doPrepareData']);

$values = [
    'name' => 'Hello'
];

$target = [
    'values' => &$values
];

$event->fireHook("testHook", $target);

print_r($target);

/*
[values] => Array
(
    [name] => Test User
)
*?/



```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

