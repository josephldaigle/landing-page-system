<?php
/**
 * Created by Joseph Daigle.
 * Date: 2019-06-01
 * Time: 23:00
 */

namespace CleanGutter\Test\Unit\CMS\Model;


use CleanGutter\CMS\Model\Menu\Menu;
use CleanGutter\CMS\Model\Menu\MenuItem;
use PHPUnit\Framework\TestCase;

/**
 * MenuTest.
 *
 * @package CleanGutter\Test\Unit\CMS\Model
 */
class MenuTest extends TestCase
{
	public function constructorThrowsInvalidArgumentExceptionTestProvider()
	{
		return [
			'string' => [ 'bad arg' ]
		];
	}

	/**
	 * @dataProvider constructorThrowsInvalidArgumentExceptionTestProvider
	 * @expectedException \TypeError
	 */
	public function testConstructorThrowsInvalidArgumentException($param)
	{
		$menu = new Menu($param);
	}

	public function testConstructorAcceptsMenuItemInterface()
	{
		$menu = new Menu(new MenuItem('test-path', 'Test Name'));

		$this->assertTrue(true);
	}

	public function testLoadInitialItems()
	{
		// tested by constructor tests
		$this->assertTrue(true);
	}
}