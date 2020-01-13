<?php

use A\Foo;
use B\Bar;

require_once __DIR__ . '/plugins/a/a.php';
require_once __DIR__ . '/plugins/b/b.php';

echo 'Call class from A' . "\n";
$a = new Foo;

echo 'Call class from B' . "\n";
$b = new Bar;
