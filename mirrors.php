<?php declare(strict_types=1);
include_once __DIR__ . '/include/prepend.inc';

header("HTTP/1.1 301 Moved Permanently");
header("Location: /");
