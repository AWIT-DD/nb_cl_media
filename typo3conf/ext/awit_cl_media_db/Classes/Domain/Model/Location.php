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
 * Location
 */
class Location extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject {

	/**
	 * longitude
	 *
	 * @var float
	 * @validate NotEmpty
	 */
	protected $longitude = 0.0;

	/**
	 * latitude
	 *
	 * @var float
	 * @validate NotEmpty
	 */
	protected $latitude = 0.0;

	/**
	 * altitude
	 *
	 * @var float
	 */
	protected $altitude = 0.0;

	/**
	 * description
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $description = '';

	/**
	 * Returns the longitude
	 *
	 * @return float $longitude
	 */
	public function getLongitude() {
		return $this->longitude;
	}

	/**
	 * Sets the longitude
	 *
	 * @param float $longitude
	 * @return void
	 */
	public function setLongitude($longitude) {
		$this->longitude = $longitude;
	}

	/**
	 * Returns the latitude
	 *
	 * @return float $latitude
	 */
	public function getLatitude() {
		return $this->latitude;
	}

	/**
	 * Sets the latitude
	 *
	 * @param float $latitude
	 * @return void
	 */
	public function setLatitude($latitude) {
		$this->latitude = $latitude;
	}

	/**
	 * Returns the altitude
	 *
	 * @return float $altitude
	 */
	public function getAltitude() {
		return $this->altitude;
	}

	/**
	 * Sets the altitude
	 *
	 * @param float $altitude
	 * @return void
	 */
	public function setAltitude($altitude) {
		$this->altitude = $altitude;
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

}