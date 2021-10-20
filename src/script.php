<?php

namespace Wcs\ComposerDemo;

require_once __DIR__ . '/../vendor/autoload.php';

use TdTrung\Chalk\Chalk;

$chalk = new Chalk();

echo $chalk->bold->red("Bold Green") . PHP_EOL;
