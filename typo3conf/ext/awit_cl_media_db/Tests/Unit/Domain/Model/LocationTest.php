<?php

namespace AWIT\AwitClMediaDb\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 A. Werner <a.werner@awit.biz>, AWIT
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \AWIT\AwitClMediaDb\Domain\Model\Location.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author A. Werner <a.werner@awit.biz>
 */
class LocationTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \AWIT\AwitClMediaDb\Domain\Model\Location
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \AWIT\AwitClMediaDb\Domain\Model\Location();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getLongitudeReturnsInitialValueForFloat() {
		$this->assertSame(
			0.0,
			$this->subject->getLongitude()
		);
	}

	/**
	 * @test
	 */
	public function setLongitudeForFloatSetsLongitude() {
		$this->subject->setLongitude(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'longitude',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getLatitudeReturnsInitialValueForFloat() {
		$this->assertSame(
			0.0,
			$this->subject->getLatitude()
		);
	}

	/**
	 * @test
	 */
	public function setLatitudeForFloatSetsLatitude() {
		$this->subject->setLatitude(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'latitude',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getAltitudeReturnsInitialValueForFloat() {
		$this->assertSame(
			0.0,
			$this->subject->getAltitude()
		);
	}

	/**
	 * @test
	 */
	public function setAltitudeForFloatSetsAltitude() {
		$this->subject->setAltitude(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'altitude',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() {
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}
}
