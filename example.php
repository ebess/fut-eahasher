<?php

    require_once __DIR__ . "/autoload.php";

	$hashor = new \Fut\EAHashor("test");
	echo $hashor->getHashedString() . PHP_EOL;

	$hashor = new \Fut\EAHashor();
	echo $hashor->setString("test")->getHashedString() . PHP_EOL;

	echo \Fut\EAHashor::getHash("test") . PHP_EOL;