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
 * Tape
 */
class Tape extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * noCL
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $noCL = '';

	/**
	 * noList
	 *
	 * @var string
	 */
	protected $noList = '';

	/**
	 * noZep
	 *
	 * @var string
	 */
	protected $noZep = '';

	/**
	 * lastEditor
	 *
	 * @var string
	 */
	protected $lastEditor = '';

	/**
	 * editTime
	 *
	 * @var \DateTime
	 */
	protected $editTime = NULL;

	/**
	 * digitTime
	 *
	 * @var \DateTime
	 */
	protected $digitTime = NULL;

	/**
	 * titleCL
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $titleCL = '';

	/**
	 * titleZep
	 *
	 * @var string
	 */
	protected $titleZep = '';

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description = '';

	/**
	 * descriptionZep
	 *
	 * @var string
	 */
	protected $descriptionZep = '';

	/**
	 * dateCL
	 *
	 * @var \DateTime
	 */
	protected $dateCL = NULL;

	/**
	 * dateZep
	 *
	 * @var \DateTime
	 */
	protected $dateZep = NULL;

	/**
	 * dateOn
	 *
	 * @var \DateTime
	 */
	protected $dateOn = NULL;

	/**
	 * digit
	 *
	 * @var boolean
	 */
	protected $digit = FALSE;

	/**
	 * physPlace
	 *
	 * @var string
	 */
	protected $physPlace = '';

	/**
	 * physPlaceNotice
	 *
	 * @var string
	 */
	protected $physPlaceNotice = '';

	/**
	 * manufact
	 *
	 * @var string
	 */
	protected $manufact = '';

	/**
	 * nomTime
	 *
	 * @var float
	 */
	protected $nomTime = 0.0;

	/**
	 * type
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $type = '';

	/**
	 * ratio
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $ratio = '';

	/**
	 * Returns the noCL
	 *
	 * @return string $noCL
	 */
	public function getNoCL() {
		return $this->noCL;
	}

	/**
	 * Sets the noCL
	 *
	 * @param string $noCL
	 * @return void
	 */
	public function setNoCL($noCL) {
		$this->noCL = $noCL;
	}

	/**
	 * Returns the noList
	 *
	 * @return string $noList
	 */
	public function getNoList() {
		return $this->noList;
	}

	/**
	 * Sets the noList
	 *
	 * @param string $noList
	 * @return void
	 */
	public function setNoList($noList) {
		$this->noList = $noList;
	}

	/**
	 * Returns the noZep
	 *
	 * @return string $noZep
	 */
	public function getNoZep() {
		return $this->noZep;
	}

	/**
	 * Sets the noZep
	 *
	 * @param string $noZep
	 * @return void
	 */
	public function setNoZep($noZep) {
		$this->noZep = $noZep;
	}

	/**
	 * Returns the lastEditor
	 *
	 * @return string $lastEditor
	 */
	public function getLastEditor() {
		return $this->lastEditor;
	}

	/**
	 * Sets the lastEditor
	 *
	 * @param string $lastEditor
	 * @return void
	 */
	public function setLastEditor($lastEditor) {
		$this->lastEditor = $lastEditor;
	}

	/**
	 * Returns the editTime
	 *
	 * @return \DateTime $editTime
	 */
	public function getEditTime() {
		return $this->editTime;
	}

	/**
	 * Sets the editTime
	 *
	 * @param \DateTime $editTime
	 * @return void
	 */
	public function setEditTime(\DateTime $editTime) {
		$this->editTime = $editTime;
	}

	/**
	 * Returns the digitTime
	 *
	 * @return \DateTime $digitTime
	 */
	public function getDigitTime() {
		return $this->digitTime;
	}

	/**
	 * Sets the digitTime
	 *
	 * @param \DateTime $digitTime
	 * @return void
	 */
	public function setDigitTime(\DateTime $digitTime) {
		$this->digitTime = $digitTime;
	}

	/**
	 * Returns the titleCL
	 *
	 * @return string $titleCL
	 */
	public function getTitleCL() {
		return $this->titleCL;
	}

	/**
	 * Sets the titleCL
	 *
	 * @param string $titleCL
	 * @return void
	 */
	public function setTitleCL($titleCL) {
		$this->titleCL = $titleCL;
	}

	/**
	 * Returns the titleZep
	 *
	 * @return string $titleZep
	 */
	public function getTitleZep() {
		return $this->titleZep;
	}

	/**
	 * Sets the titleZep
	 *
	 * @param string $titleZep
	 * @return void
	 */
	public function setTitleZep($titleZep) {
		$this->titleZep = $titleZep;
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
	 * Returns the descriptionZep
	 *
	 * @return string $descriptionZep
	 */
	public function getDescriptionZep() {
		return $this->descriptionZep;
	}

	/**
	 * Sets the descriptionZep
	 *
	 * @param string $descriptionZep
	 * @return void
	 */
	public function setDescriptionZep($descriptionZep) {
		$this->descriptionZep = $descriptionZep;
	}

	/**
	 * Returns the dateCL
	 *
	 * @return \DateTime $dateCL
	 */
	public function getDateCL() {
		return $this->dateCL;
	}

	/**
	 * Sets the dateCL
	 *
	 * @param \DateTime $dateCL
	 * @return void
	 */
	public function setDateCL(\DateTime $dateCL) {
		$this->dateCL = $dateCL;
	}

	/**
	 * Returns the dateZep
	 *
	 * @return \DateTime $dateZep
	 */
	public function getDateZep() {
		return $this->dateZep;
	}

	/**
	 * Sets the dateZep
	 *
	 * @param \DateTime $dateZep
	 * @return void
	 */
	public function setDateZep(\DateTime $dateZep) {
		$this->dateZep = $dateZep;
	}

	/**
	 * Returns the dateOn
	 *
	 * @return \DateTime $dateOn
	 */
	public function getDateOn() {
		return $this->dateOn;
	}

	/**
	 * Sets the dateOn
	 *
	 * @param \DateTime $dateOn
	 * @return void
	 */
	public function setDateOn(\DateTime $dateOn) {
		$this->dateOn = $dateOn;
	}

	/**
	 * Returns the digit
	 *
	 * @return boolean $digit
	 */
	public function getDigit() {
		return $this->digit;
	}

	/**
	 * Sets the digit
	 *
	 * @param boolean $digit
	 * @return void
	 */
	public function setDigit($digit) {
		$this->digit = $digit;
	}

	/**
	 * Returns the boolean state of digit
	 *
	 * @return boolean
	 */
	public function isDigit() {
		return $this->digit;
	}

	/**
	 * Returns the physPlace
	 *
	 * @return string $physPlace
	 */
	public function getPhysPlace() {
		return $this->physPlace;
	}

	/**
	 * Sets the physPlace
	 *
	 * @param string $physPlace
	 * @return void
	 */
	public function setPhysPlace($physPlace) {
		$this->physPlace = $physPlace;
	}

	/**
	 * Returns the physPlaceNotice
	 *
	 * @return string $physPlaceNotice
	 */
	public function getPhysPlaceNotice() {
		return $this->physPlaceNotice;
	}

	/**
	 * Sets the physPlaceNotice
	 *
	 * @param string $physPlaceNotice
	 * @return void
	 */
	public function setPhysPlaceNotice($physPlaceNotice) {
		$this->physPlaceNotice = $physPlaceNotice;
	}

	/**
	 * Returns the manufact
	 *
	 * @return string $manufact
	 */
	public function getManufact() {
		return $this->manufact;
	}

	/**
	 * Sets the manufact
	 *
	 * @param string $manufact
	 * @return void
	 */
	public function setManufact($manufact) {
		$this->manufact = $manufact;
	}

	/**
	 * Returns the nomTime
	 *
	 * @return float $nomTime
	 */
	public function getNomTime() {
		return $this->nomTime;
	}

	/**
	 * Sets the nomTime
	 *
	 * @param float $nomTime
	 * @return void
	 */
	public function setNomTime($nomTime) {
		$this->nomTime = $nomTime;
	}

	/**
	 * Returns the type
	 *
	 * @return string $type
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets the type
	 *
	 * @param string $type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Returns the ratio
	 *
	 * @return string $ratio
	 */
	public function getRatio() {
		return $this->ratio;
	}

	/**
	 * Sets the ratio
	 *
	 * @param string $ratio
	 * @return void
	 */
	public function setRatio($ratio) {
		$this->ratio = $ratio;
	}

}