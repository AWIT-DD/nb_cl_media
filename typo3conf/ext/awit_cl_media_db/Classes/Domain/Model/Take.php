<?php
namespace AWIT\AwitClMediaDb\Domain\Model;

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
 * Take
 */
class Take extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * codecSmall
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $codecSmall = '';

	/**
	 * startTimeTape
	 *
	 * @var \DateTime
	 */
	protected $startTimeTape = NULL;

	/**
	 * endTimeTape
	 *
	 * @var \DateTime
	 */
	protected $endTimeTape = NULL;

	/**
	 * endurance
	 *
	 * @var integer
	 */
	protected $endurance = 0;

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description = '';

	/**
	 * operator
	 *
	 * @var string
	 */
	protected $operator = '';

	/**
	 * operatorText
	 *
	 * @var string
	 */
	protected $operatorText = '';

	/**
	 * recordDateTime
	 *
	 * @var \DateTime
	 */
	protected $recordDateTime = NULL;

	/**
	 * codecMaster
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $codecMaster = '';

	/**
	 * codecMid
	 *
	 * @var string
	 */
	protected $codecMid = '';

	/**
	 * picSizeMaster
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $picSizeMaster = '';

	/**
	 * picSizeMid
	 *
	 * @var string
	 */
	protected $picSizeMid = '';

	/**
	 * picSizeSmall
	 *
	 * @var string
	 */
	protected $picSizeSmall = '';

	/**
	 * fileSizeMaster
	 *
	 * @var float
	 * @validate NotEmpty
	 */
	protected $fileSizeMaster = 0.0;

	/**
	 * fileSizeMid
	 *
	 * @var float
	 */
	protected $fileSizeMid = 0.0;

	/**
	 * fileSizeSmall
	 *
	 * @var float
	 */
	protected $fileSizeSmall = 0.0;

	/**
	 * fileName
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $fileName = '';

	/**
	 * tape
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AWIT\AwitClMediaDb\Domain\Model\Tape>
	 */
	protected $tape = NULL;

	/**
	 * location
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AWIT\AwitClMediaDb\Domain\Model\Location>
	 * @cascade remove
	 */
	protected $location = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->tape = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->location = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the startTimeTape
	 *
	 * @return \DateTime $startTimeTape
	 */
	public function getStartTimeTape() {
		return $this->startTimeTape;
	}

	/**
	 * Sets the startTimeTape
	 *
	 * @param \DateTime $startTimeTape
	 * @return void
	 */
	public function setStartTimeTape(\DateTime $startTimeTape) {
		$this->startTimeTape = $startTimeTape;
	}

	/**
	 * Returns the endTimeTape
	 *
	 * @return \DateTime $endTimeTape
	 */
	public function getEndTimeTape() {
		return $this->endTimeTape;
	}

	/**
	 * Sets the endTimeTape
	 *
	 * @param \DateTime $endTimeTape
	 * @return void
	 */
	public function setEndTimeTape(\DateTime $endTimeTape) {
		$this->endTimeTape = $endTimeTape;
	}

	/**
	 * Returns the endurance
	 *
	 * @return integer $endurance
	 */
	public function getEndurance() {
		return $this->endurance;
	}

	/**
	 * Sets the endurance
	 *
	 * @param integer $endurance
	 * @return void
	 */
	public function setEndurance(integer $endurance) {
		$this->endurance = $endurance;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the operator
	 *
	 * @return string $operator
	 */
	public function getOperator() {
		return $this->operator;
	}

	/**
	 * Sets the operator
	 *
	 * @param string $operator
	 * @return void
	 */
	public function setOperator($operator) {
		$this->operator = $operator;
	}

	/**
	 * Returns the operatorText
	 *
	 * @return string $operatorText
	 */
	public function getOperatorText() {
		return $this->operatorText;
	}

	/**
	 * Sets the operatorText
	 *
	 * @param string $operatorText
	 * @return void
	 */
	public function setOperatorText($operatorText) {
		$this->operatorText = $operatorText;
	}

	/**
	 * Returns the recordDateTime
	 *
	 * @return \DateTime $recordDateTime
	 */
	public function getRecordDateTime() {
		return $this->recordDateTime;
	}

	/**
	 * Sets the recordDateTime
	 *
	 * @param \DateTime $recordDateTime
	 * @return void
	 */
	public function setRecordDateTime(\DateTime $recordDateTime) {
		$this->recordDateTime = $recordDateTime;
	}

	/**
	 * Returns the codecMaster
	 *
	 * @return string $codecMaster
	 */
	public function getCodecMaster() {
		return $this->codecMaster;
	}

	/**
	 * Sets the codecMaster
	 *
	 * @param string $codecMaster
	 * @return void
	 */
	public function setCodecMaster($codecMaster) {
		$this->codecMaster = $codecMaster;
	}

	/**
	 * Returns the codecMid
	 *
	 * @return string $codecMid
	 */
	public function getCodecMid() {
		return $this->codecMid;
	}

	/**
	 * Sets the codecMid
	 *
	 * @param string $codecMid
	 * @return void
	 */
	public function setCodecMid($codecMid) {
		$this->codecMid = $codecMid;
	}

	/**
	 * Returns the picSizeMaster
	 *
	 * @return string $picSizeMaster
	 */
	public function getPicSizeMaster() {
		return $this->picSizeMaster;
	}

	/**
	 * Sets the picSizeMaster
	 *
	 * @param string $picSizeMaster
	 * @return void
	 */
	public function setPicSizeMaster($picSizeMaster) {
		$this->picSizeMaster = $picSizeMaster;
	}

	/**
	 * Returns the picSizeMid
	 *
	 * @return string $picSizeMid
	 */
	public function getPicSizeMid() {
		return $this->picSizeMid;
	}

	/**
	 * Sets the picSizeMid
	 *
	 * @param string $picSizeMid
	 * @return void
	 */
	public function setPicSizeMid($picSizeMid) {
		$this->picSizeMid = $picSizeMid;
	}

	/**
	 * Returns the picSizeSmall
	 *
	 * @return string $picSizeSmall
	 */
	public function getPicSizeSmall() {
		return $this->picSizeSmall;
	}

	/**
	 * Sets the picSizeSmall
	 *
	 * @param string $picSizeSmall
	 * @return void
	 */
	public function setPicSizeSmall($picSizeSmall) {
		$this->picSizeSmall = $picSizeSmall;
	}

	/**
	 * Returns the fileSizeMaster
	 *
	 * @return float $fileSizeMaster
	 */
	public function getFileSizeMaster() {
		return $this->fileSizeMaster;
	}

	/**
	 * Sets the fileSizeMaster
	 *
	 * @param float $fileSizeMaster
	 * @return void
	 */
	public function setFileSizeMaster($fileSizeMaster) {
		$this->fileSizeMaster = $fileSizeMaster;
	}

	/**
	 * Returns the fileSizeMid
	 *
	 * @return float $fileSizeMid
	 */
	public function getFileSizeMid() {
		return $this->fileSizeMid;
	}

	/**
	 * Sets the fileSizeMid
	 *
	 * @param float $fileSizeMid
	 * @return void
	 */
	public function setFileSizeMid($fileSizeMid) {
		$this->fileSizeMid = $fileSizeMid;
	}

	/**
	 * Returns the fileSizeSmall
	 *
	 * @return float $fileSizeSmall
	 */
	public function getFileSizeSmall() {
		return $this->fileSizeSmall;
	}

	/**
	 * Sets the fileSizeSmall
	 *
	 * @param float $fileSizeSmall
	 * @return void
	 */
	public function setFileSizeSmall($fileSizeSmall) {
		$this->fileSizeSmall = $fileSizeSmall;
	}

	/**
	 * Returns the fileName
	 *
	 * @return string $fileName
	 */
	public function getFileName() {
		return $this->fileName;
	}

	/**
	 * Sets the fileName
	 *
	 * @param string $fileName
	 * @return void
	 */
	public function setFileName($fileName) {
		$this->fileName = $fileName;
	}

	/**
	 * Adds a Tape
	 *
	 * @param \AWIT\AwitClMediaDb\Domain\Model\Tape $tape
	 * @return void
	 */
	public function addTape(\AWIT\AwitClMediaDb\Domain\Model\Tape $tape) {
		$this->tape->attach($tape);
	}

	/**
	 * Removes a Tape
	 *
	 * @param \AWIT\AwitClMediaDb\Domain\Model\Tape $tapeToRemove The Tape to be removed
	 * @return void
	 */
	public function removeTape(\AWIT\AwitClMediaDb\Domain\Model\Tape $tapeToRemove) {
		$this->tape->detach($tapeToRemove);
	}

	/**
	 * Returns the tape
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AWIT\AwitClMediaDb\Domain\Model\Tape> $tape
	 */
	public function getTape() {
		return $this->tape;
	}

	/**
	 * Sets the tape
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AWIT\AwitClMediaDb\Domain\Model\Tape> $tape
	 * @return void
	 */
	public function setTape(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $tape) {
		$this->tape = $tape;
	}

	/**
	 * Adds a Location
	 *
	 * @param \AWIT\AwitClMediaDb\Domain\Model\Location $location
	 * @return void
	 */
	public function addLocation(\AWIT\AwitClMediaDb\Domain\Model\Location $location) {
		$this->location->attach($location);
	}

	/**
	 * Removes a Location
	 *
	 * @param \AWIT\AwitClMediaDb\Domain\Model\Location $locationToRemove The Location to be removed
	 * @return void
	 */
	public function removeLocation(\AWIT\AwitClMediaDb\Domain\Model\Location $locationToRemove) {
		$this->location->detach($locationToRemove);
	}

	/**
	 * Returns the location
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AWIT\AwitClMediaDb\Domain\Model\Location> $location
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Sets the location
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AWIT\AwitClMediaDb\Domain\Model\Location> $location
	 * @return void
	 */
	public function setLocation(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $location) {
		$this->location = $location;
	}

	/**
	 * Returns the codecSmall
	 *
	 * @return string $codecSmall
	 */
	public function getCodecSmall() {
		return $this->codecSmall;
	}

	/**
	 * Sets the codecSmall
	 *
	 * @param string $codecSmall
	 * @return void
	 */
	public function setCodecSmall($codecSmall) {
		$this->codecSmall = $codecSmall;
	}

}