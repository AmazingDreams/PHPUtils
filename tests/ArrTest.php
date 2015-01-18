<?php

require __DIR__.'/../vendor/autoload.php';

use \AD\PHPUtils\Arr;

class ArrTest extends \PHPUnit_Framework_Testcase {

	public function testGet()
	{
		$array = array(
			'cow' => 'moo',
		);

		$this->assertEquals('moo',       Arr::get($array, 'cow'));
		$this->assertEquals('moo',       Arr::get($array, 'cow', 'meow'));
		$this->assertEquals(NULL,        Arr::get($array, 'lotsofcows'));
		$this->assertEquals('lotsofmoo', Arr::get($array, 'lotsofcows', 'lotsofmoo'));
	}

}
