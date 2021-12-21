<?php

$finder = (new PhpCsFixer\Finder)->in(__DIR__.'/src');

return (new \DistortedFusion\PhpCsFixerConfig\Config)->setFinder($finder);
