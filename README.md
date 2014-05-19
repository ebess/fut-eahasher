Hashor class for mobile/webapp endpoint of Fifa 14 Ultimate Team.

 composer.json
```json
    require {
        "fut/eahashor": "dev-master"
    }
```

Example: (also see example.php)
```php
    $hashor = new \Fut\EAHashor("test");
    echo $hashor->getHashedString() . PHP_EOL;

    $hashor = new \Fut\EAHashor();
    echo $hashor->setString("test")->getHashedString() . PHP_EOL;

    echo \Fut\EAHashor::getHash("test") . PHP_EOL;
```
