<?php declare(strict_types = 1);

namespace App;

use Contributte\FrameX\Application;
use Contributte\Kernel\Bootloader;
use Contributte\Kernel\Kernel;
use Contributte\Kernel\Modules\ConfigModule;
use Contributte\Kernel\Modules\EnvModule;
use Contributte\Kernel\Modules\InjectionModule;
use Contributte\Kernel\Modules\TracyModule;

final class Bootstrap
{

	public static function boot(): Kernel
	{
		return Bootloader::of(__DIR__)
			->use(TracyModule::create())
			->use(ConfigModule::create())
			->use(EnvModule::create())
			->use(InjectionModule::create())
			->boot();
	}

	public static function run(): void
	{
		self::boot()
			->createContainer()
			->getByType(Application::class)
			->run();
	}

}
