<?php

return \Symfony\CS\Config\Config::create()
->level(\Symfony\CS\FixerInterface::PSR2_LEVEL)
->finder(
    \Symfony\CS\Finder\DefaultFinder::create()
    ->exclude('vendor')
    ->exclude('assets')
    ->exclude('build')
    ->exclude('node_modules')
    ->exclude('bower_components')
    ->exclude('templates')
    ->in(__DIR__)
);
