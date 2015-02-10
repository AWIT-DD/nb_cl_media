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
 * Test case for class AWIT\AwitClMediaDb\Controller\TakeController.
 *
 * @author A. Werner <a.werner@awit.biz>
 */
class TakeControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \AWIT\AwitClMediaDb\Controller\TakeController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('AWIT\\AwitClMediaDb\\Controller\\TakeController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllTakesFromRepositoryAndAssignsThemToView() {

		$allTakes = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$takeRepository = $this->getMock('AWIT\\AwitClMediaDb\\Domain\\Repository\\TakeRepository', array('findAll'), array(), '', FALSE);
		$takeRepository->expects($this->once())->method('findAll')->will($this->returnValue($allTakes));
		$this->inject($this->subject, 'takeRepository', $takeRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('takes', $allTakes);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenTakeToView() {
		$take = new \AWIT\AwitClMediaDb\Domain\Model\Take();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('take', $take);

		$this->subject->showAction($take);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenTakeToView() {
		$take = new \AWIT\AwitClMediaDb\Domain\Model\Take();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newTake', $take);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($take);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenTakeToTakeRepository() {
		$take = new \AWIT\AwitClMediaDb\Domain\Model\Take();

		$takeRepository = $this->getMock('AWIT\\AwitClMediaDb\\Domain\\Repository\\TakeRepository', array('add'), array(), '', FALSE);
		$takeRepository->expects($this->once())->method('add')->with($take);
		$this->inject($this->subject, 'takeRepository', $takeRepository);

		$this->subject->createAction($take);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenTakeToView() {
		$take = new \AWIT\AwitClMediaDb\Domain\Model\Take();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('take', $take);

		$this->subject->editAction($take);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenTakeInTakeRepository() {
		$take = new \AWIT\AwitClMediaDb\Domain\Model\Take();

		$takeRepository = $this->getMock('AWIT\\AwitClMediaDb\\Domain\\Repository\\TakeRepository', array('update'), array(), '', FALSE);
		$takeRepository->expects($this->once())->method('update')->with($take);
		$this->inject($this->subject, 'takeRepository', $takeRepository);

		$this->subject->updateAction($take);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenTakeFromTakeRepository() {
		$take = new \AWIT\AwitClMediaDb\Domain\Model\Take();

		$takeRepository = $this->getMock('AWIT\\AwitClMediaDb\\Domain\\Repository\\TakeRepository', array('remove'), array(), '', FALSE);
		$takeRepository->expects($this->once())->method('remove')->with($take);
		$this->inject($this->subject, 'takeRepository', $takeRepository);

		$this->subject->deleteAction($take);
	}
}
