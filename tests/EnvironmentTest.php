<?php

require __DIR__.'/../vendor/autoload.php';

use \AD\PHPUtils\Environment;

class EnvironmentTest extends PHPUnit_Framework_Testcase {

	public function testIsProduction()
	{
		$environment = new Environment();

		$this->assertTrue($environment->isProduction());
	}

	public function testIsStaging()
	{
		$environment = new Environment(Environment::STAGING);

		$this->assertTrue($environment->isStaging());
	}

	public function testIsDevelopment()
	{
		$environment = new Environment(Environment::DEVELOPMENT);

		$this->assertTrue($environment->isDevelopment());
	}

	public function testSetProduction()
	{
		$environment = new Environment(Environment::STAGING);

		$this->assertFalse($environment->isProduction());

		$environment->setEnv(Environment::PRODUCTION);

		$this->assertTrue($environment->isProduction());
	}
}
