<?php
namespace AWIT\AwitClMediaDb\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014 A. Werner <a.werner@awit.biz>, AWIT
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * TapeController
 */
class TapeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$tapes = $this->tapeRepository->findAll();
		$this->view->assign('tapes', $tapes);
	}

	/**
	 * action show
	 *
	 * @param \AWIT\AwitClMediaDb\Domain\Model\Tape $tape
	 * @return void
	 */
	public function showAction(\AWIT\AwitClMediaDb\Domain\Model\Tape $tape) {
		$this->view->assign('tape', $tape);
	}

	/**
	 * action new
	 *
	 * @param \AWIT\AwitClMediaDb\Domain\Model\Tape $newTape
	 * @ignorevalidation $newTape
	 * @return void
	 */
	public function newAction(\AWIT\AwitClMediaDb\Domain\Model\Tape $newTape = NULL) {
		$this->view->assign('newTape', $newTape);
	}

	/**
	 * action create
	 *
	 * @param \AWIT\AwitClMediaDb\Domain\Model\Tape $newTape
	 * @return void
	 */
	public function createAction(\AWIT\AwitClMediaDb\Domain\Model\Tape $newTape) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->tapeRepository->add($newTape);
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \AWIT\AwitClMediaDb\Domain\Model\Tape $tape
	 * @ignorevalidation $tape
	 * @return void
	 */
	public function editAction(\AWIT\AwitClMediaDb\Domain\Model\Tape $tape) {
		$this->view->assign('tape', $tape);
	}

	/**
	 * action update
	 *
	 * @param \AWIT\AwitClMediaDb\Domain\Model\Tape $tape
	 * @return void
	 */
	public function updateAction(\AWIT\AwitClMediaDb\Domain\Model\Tape $tape) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->tapeRepository->update($tape);
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \AWIT\AwitClMediaDb\Domain\Model\Tape $tape
	 * @return void
	 */
	public function deleteAction(\AWIT\AwitClMediaDb\Domain\Model\Tape $tape) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->tapeRepository->remove($tape);
		$this->redirect('list');
	}

}