<?php declare(strict_types = 1);

namespace PHPStan\Compiler\Filesystem;

interface Filesystem
{

	public function exists(string $dir): bool;

	public function remove(string $dir): void;

	public function mkdir(string $dir): void;

}
