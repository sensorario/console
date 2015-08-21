<?php

namespace Sensorario\Console;

use PHPUnit_Framework_TestCase;
use Sensorario\Console\Console;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class ConsoleTest extends PHPUnit_Framework_TestCase
{
    public function test()
    {
        $application = new Application();
        $application->add(new Console());

        $helpCommand = $application->find('sensorario:console');
        $testCommand = new CommandTester($helpCommand);
        $output = $testCommand->execute(['command'=>$helpCommand->getName()]);

        $this->assertRegExp('/^Console$/', $testCommand->getDisplay());
    }
}
