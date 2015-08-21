#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';

use Sensorario\Console\Console;
use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new Console());
$application->run();
