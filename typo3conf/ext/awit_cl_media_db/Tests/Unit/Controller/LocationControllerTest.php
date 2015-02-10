<?php
namespace AWIT\AwitClMediaDb\Tests\Unit\Controller;
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
 * Test case for class AWIT\AwitClMediaDb\Controller\LocationController.
 *
 * @author A. Werner <a.werner@awit.biz>
 */
class LocationControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \AWIT\AwitClMediaDb\Controller\LocationController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('AWIT\\AwitClMediaDb\\Controller\\LocationController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllLocationsFromRepositoryAndAssignsThemToView() {

		$allLocations = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$locationRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$locationRepository->expects($this->once())->method('findAll')->will($this->returnValue($allLocations));
		$this->inject($this->subject, 'locationRepository', $locationRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('locations', $allLocations);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenLocationToView() {
		$location = new \AWIT\AwitClMediaDb\Domain\Model\Location();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('location', $location);

		$this->subject->showAction($location);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenLocationToView() {
		$location = new \AWIT\AwitClMediaDb\Domain\Model\Location();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newLocation', $location);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($location);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenLocationToLocationRepository() {
		$location = new \AWIT\AwitClMediaDb\Domain\Model\Location();

		$locationRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$locationRepository->expects($this->once())->method('add')->with($location);
		$this->inject($this->subject, 'locationRepository', $locationRepository);

		$this->subject->createAction($location);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenLocationToView() {
		$location = new \AWIT\AwitClMediaDb\Domain\Model\Location();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('location', $location);

		$this->subject->editAction($location);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenLocationInLocationRepository() {
		$location = new \AWIT\AwitClMediaDb\Domain\Model\Location();

		$locationRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$locationRepository->expects($this->once())->method('update')->with($location);
		$this->inject($this->subject, 'locationRepository', $locationRepository);

		$this->subject->updateAction($location);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenLocationFromLocationRepository() {
		$location = new \AWIT\AwitClMediaDb\Domain\Model\Location();

		$locationRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$locationRepository->expects($this->once())->method('remove')->with($location);
		$this->inject($this->subject, 'locationRepository', $locationRepository);

		$this->subject->deleteAction($location);
	}
}
