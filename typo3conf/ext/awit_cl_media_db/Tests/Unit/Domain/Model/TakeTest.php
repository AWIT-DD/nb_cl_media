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
 * Test case for class \AWIT\AwitClMediaDb\Domain\Model\Take.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author A. Werner <a.werner@awit.biz>
 */
class TakeTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \AWIT\AwitClMediaDb\Domain\Model\Take
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \AWIT\AwitClMediaDb\Domain\Model\Take();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getStartTimeTapeReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getStartTimeTape()
		);
	}

	/**
	 * @test
	 */
	public function setStartTimeTapeForDateTimeSetsStartTimeTape() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setStartTimeTape($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'startTimeTape',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEndTimeTapeReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getEndTimeTape()
		);
	}

	/**
	 * @test
	 */
	public function setEndTimeTapeForDateTimeSetsEndTimeTape() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setEndTimeTape($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'endTimeTape',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEnduranceReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getEndurance()
		);
	}

	/**
	 * @test
	 */
	public function setEnduranceForIntegerSetsEndurance() {
		$this->subject->setEndurance(12);

		$this->assertAttributeEquals(
			12,
			'endurance',
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
	public function getOperatorReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getOperator()
		);
	}

	/**
	 * @test
	 */
	public function setOperatorForStringSetsOperator() {
		$this->subject->setOperator('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'operator',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getOperatorTextReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getOperatorText()
		);
	}

	/**
	 * @test
	 */
	public function setOperatorTextForStringSetsOperatorText() {
		$this->subject->setOperatorText('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'operatorText',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRecordDateTimeReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getRecordDateTime()
		);
	}

	/**
	 * @test
	 */
	public function setRecordDateTimeForDateTimeSetsRecordDateTime() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setRecordDateTime($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'recordDateTime',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCodecMasterReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCodecMaster()
		);
	}

	/**
	 * @test
	 */
	public function setCodecMasterForStringSetsCodecMaster() {
		$this->subject->setCodecMaster('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'codecMaster',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCodecMidReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCodecMid()
		);
	}

	/**
	 * @test
	 */
	public function setCodecMidForStringSetsCodecMid() {
		$this->subject->setCodecMid('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'codecMid',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPicSizeMasterReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPicSizeMaster()
		);
	}

	/**
	 * @test
	 */
	public function setPicSizeMasterForStringSetsPicSizeMaster() {
		$this->subject->setPicSizeMaster('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'picSizeMaster',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPicSizeMidReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPicSizeMid()
		);
	}

	/**
	 * @test
	 */
	public function setPicSizeMidForStringSetsPicSizeMid() {
		$this->subject->setPicSizeMid('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'picSizeMid',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPicSizeSmallReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPicSizeSmall()
		);
	}

	/**
	 * @test
	 */
	public function setPicSizeSmallForStringSetsPicSizeSmall() {
		$this->subject->setPicSizeSmall('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'picSizeSmall',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFileSizeMasterReturnsInitialValueForFloat() {
		$this->assertSame(
			0.0,
			$this->subject->getFileSizeMaster()
		);
	}

	/**
	 * @test
	 */
	public function setFileSizeMasterForFloatSetsFileSizeMaster() {
		$this->subject->setFileSizeMaster(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'fileSizeMaster',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getFileSizeMidReturnsInitialValueForFloat() {
		$this->assertSame(
			0.0,
			$this->subject->getFileSizeMid()
		);
	}

	/**
	 * @test
	 */
	public function setFileSizeMidForFloatSetsFileSizeMid() {
		$this->subject->setFileSizeMid(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'fileSizeMid',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getFileSizeSmallReturnsInitialValueForFloat() {
		$this->assertSame(
			0.0,
			$this->subject->getFileSizeSmall()
		);
	}

	/**
	 * @test
	 */
	public function setFileSizeSmallForFloatSetsFileSizeSmall() {
		$this->subject->setFileSizeSmall(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'fileSizeSmall',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getFileNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getFileName()
		);
	}

	/**
	 * @test
	 */
	public function setFileNameForStringSetsFileName() {
		$this->subject->setFileName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'fileName',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCodecSmallReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCodecSmall()
		);
	}

	/**
	 * @test
	 */
	public function setCodecSmallForStringSetsCodecSmall() {
		$this->subject->setCodecSmall('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'codecSmall',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTapeReturnsInitialValueForTape() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getTape()
		);
	}

	/**
	 * @test
	 */
	public function setTapeForObjectStorageContainingTapeSetsTape() {
		$tape = new \AWIT\AwitClMediaDb\Domain\Model\Tape();
		$objectStorageHoldingExactlyOneTape = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneTape->attach($tape);
		$this->subject->setTape($objectStorageHoldingExactlyOneTape);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneTape,
			'tape',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addTapeToObjectStorageHoldingTape() {
		$tape = new \AWIT\AwitClMediaDb\Domain\Model\Tape();
		$tapeObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$tapeObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($tape));
		$this->inject($this->subject, 'tape', $tapeObjectStorageMock);

		$this->subject->addTape($tape);
	}

	/**
	 * @test
	 */
	public function removeTapeFromObjectStorageHoldingTape() {
		$tape = new \AWIT\AwitClMediaDb\Domain\Model\Tape();
		$tapeObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$tapeObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($tape));
		$this->inject($this->subject, 'tape', $tapeObjectStorageMock);

		$this->subject->removeTape($tape);

	}

	/**
	 * @test
	 */
	public function getLocationReturnsInitialValueForLocation() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getLocation()
		);
	}

	/**
	 * @test
	 */
	public function setLocationForObjectStorageContainingLocationSetsLocation() {
		$location = new \AWIT\AwitClMediaDb\Domain\Model\Location();
		$objectStorageHoldingExactlyOneLocation = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneLocation->attach($location);
		$this->subject->setLocation($objectStorageHoldingExactlyOneLocation);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneLocation,
			'location',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addLocationToObjectStorageHoldingLocation() {
		$location = new \AWIT\AwitClMediaDb\Domain\Model\Location();
		$locationObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$locationObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($location));
		$this->inject($this->subject, 'location', $locationObjectStorageMock);

		$this->subject->addLocation($location);
	}

	/**
	 * @test
	 */
	public function removeLocationFromObjectStorageHoldingLocation() {
		$location = new \AWIT\AwitClMediaDb\Domain\Model\Location();
		$locationObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$locationObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($location));
		$this->inject($this->subject, 'location', $locationObjectStorageMock);

		$this->subject->removeLocation($location);

	}
}
