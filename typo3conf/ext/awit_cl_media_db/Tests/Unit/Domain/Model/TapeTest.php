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
 * Test case for class \AWIT\AwitClMediaDb\Domain\Model\Tape.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author A. Werner <a.werner@awit.biz>
 */
class TapeTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \AWIT\AwitClMediaDb\Domain\Model\Tape
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \AWIT\AwitClMediaDb\Domain\Model\Tape();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNoCLReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getNoCL()
		);
	}

	/**
	 * @test
	 */
	public function setNoCLForStringSetsNoCL() {
		$this->subject->setNoCL('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'noCL',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getNoListReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getNoList()
		);
	}

	/**
	 * @test
	 */
	public function setNoListForStringSetsNoList() {
		$this->subject->setNoList('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'noList',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getNoZepReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getNoZep()
		);
	}

	/**
	 * @test
	 */
	public function setNoZepForStringSetsNoZep() {
		$this->subject->setNoZep('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'noZep',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLastEditorReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLastEditor()
		);
	}

	/**
	 * @test
	 */
	public function setLastEditorForStringSetsLastEditor() {
		$this->subject->setLastEditor('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'lastEditor',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEditTimeReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getEditTime()
		);
	}

	/**
	 * @test
	 */
	public function setEditTimeForDateTimeSetsEditTime() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setEditTime($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'editTime',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDigitTimeReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getDigitTime()
		);
	}

	/**
	 * @test
	 */
	public function setDigitTimeForDateTimeSetsDigitTime() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setDigitTime($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'digitTime',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTitleCLReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitleCL()
		);
	}

	/**
	 * @test
	 */
	public function setTitleCLForStringSetsTitleCL() {
		$this->subject->setTitleCL('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'titleCL',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTitleZepReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitleZep()
		);
	}

	/**
	 * @test
	 */
	public function setTitleZepForStringSetsTitleZep() {
		$this->subject->setTitleZep('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'titleZep',
			$this->subject
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

	/**
	 * @test
	 */
	public function getDescriptionZepReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDescriptionZep()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionZepForStringSetsDescriptionZep() {
		$this->subject->setDescriptionZep('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'descriptionZep',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDateCLReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getDateCL()
		);
	}

	/**
	 * @test
	 */
	public function setDateCLForDateTimeSetsDateCL() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setDateCL($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'dateCL',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDateZepReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getDateZep()
		);
	}

	/**
	 * @test
	 */
	public function setDateZepForDateTimeSetsDateZep() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setDateZep($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'dateZep',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDateOnReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getDateOn()
		);
	}

	/**
	 * @test
	 */
	public function setDateOnForDateTimeSetsDateOn() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setDateOn($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'dateOn',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDigitReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getDigit()
		);
	}

	/**
	 * @test
	 */
	public function setDigitForBooleanSetsDigit() {
		$this->subject->setDigit(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'digit',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPhysPlaceReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPhysPlace()
		);
	}

	/**
	 * @test
	 */
	public function setPhysPlaceForStringSetsPhysPlace() {
		$this->subject->setPhysPlace('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'physPlace',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPhysPlaceNoticeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPhysPlaceNotice()
		);
	}

	/**
	 * @test
	 */
	public function setPhysPlaceNoticeForStringSetsPhysPlaceNotice() {
		$this->subject->setPhysPlaceNotice('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'physPlaceNotice',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getManufactReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getManufact()
		);
	}

	/**
	 * @test
	 */
	public function setManufactForStringSetsManufact() {
		$this->subject->setManufact('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'manufact',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getNomTimeReturnsInitialValueForFloat() {
		$this->assertSame(
			0.0,
			$this->subject->getNomTime()
		);
	}

	/**
	 * @test
	 */
	public function setNomTimeForFloatSetsNomTime() {
		$this->subject->setNomTime(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'nomTime',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getTypeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getType()
		);
	}

	/**
	 * @test
	 */
	public function setTypeForStringSetsType() {
		$this->subject->setType('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'type',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRatioReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getRatio()
		);
	}

	/**
	 * @test
	 */
	public function setRatioForStringSetsRatio() {
		$this->subject->setRatio('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'ratio',
			$this->subject
		);
	}
}
