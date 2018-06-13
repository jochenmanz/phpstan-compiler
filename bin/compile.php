<?php declare(strict_types = 1);

use PHPStan\Compiler\Console\CompileCommand;
use PHPStan\Compiler\Filesystem\SymfonyFilesystem;
use PHPStan\Compiler\Process\DefaultProcessFactory;
use Symfony\Component\Console\Application;

require_once __DIR__ . '/../vendor/autoload.php';

$compileCommand = new CompileCommand(
	new SymfonyFilesystem(new \Symfony\Component\Filesystem\Filesystem()),
	new DefaultProcessFactory(),
	__DIR__ . '/../build',
	__DIR__ . '/../tmp/build'
);

$application = new Application();
$application->add($compileCommand);
$application->setDefaultCommand($compileCommand->getName(), true);
$application->run();
