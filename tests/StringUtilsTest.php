<?php

require_once __DIR__ . '/../src/StringUtils.php';
require_once __DIR__ . '/../vendor/autoload.php';

use Webmozart\Assert\Assert;

Assert::eq(StringUtils\capitalize('hello'), 'Hello');

Assert::eq(StringUtils\capitalize(''), '');

echo 'Все тесты пройдены!';
