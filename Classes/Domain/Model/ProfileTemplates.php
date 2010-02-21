<?php

/***************************************************************
*  Copyright notice
*
*  (c) 2010 Gordon Brüggemann <gordon.brueggemann@tudock.de>, TUDOCK Pahlmann & Wolf GbR
*  			Felix Krüger <felix.krueger@tudock.de>, TUDOCK Pahlmann & Wolf GbR
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
 * Enthätl die Vorlage Welche Daten erhoben werden soll 
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_T3community_Domain_Model_ProfileTemplates extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * Name Titel Label
	 * @var string
	 * @validate NotEmpty
	 */
	protected $profilwertart;
	
	/**
	 * input type select
	 * @var string
	 */
	protected $feldtype;
	
	/**
	 * validation
	 * @var string
	 */
	protected $validation;
	
	/**
	 * cssid
	 * @var string
	 */
	protected $cssid;
	
	/**
	 * innertag
	 * @var string
	 */
	protected $innertag;
	
	
	
	/**
	 * Setter for profilwertart
	 *
	 * @param string $profilwertart Name Titel Label
	 * @return void
	 */
	public function setProfilwertart($profilwertart) {
		$this->profilwertart = $profilwertart;
	}

	/**
	 * Getter for profilwertart
	 *
	 * @return string Name Titel Label
	 */
	public function getProfilwertart() {
		return $this->profilwertart;
	}
	
	/**
	 * Setter for feldtype
	 *
	 * @param string $feldtype input type select
	 * @return void
	 */
	public function setFeldtype($feldtype) {
		$this->feldtype = $feldtype;
	}

	/**
	 * Getter for feldtype
	 *
	 * @return string input type select
	 */
	public function getFeldtype() {
		return $this->feldtype;
	}
	
	/**
	 * Setter for validation
	 *
	 * @param string $validation validation
	 * @return void
	 */
	public function setValidation($validation) {
		$this->validation = $validation;
	}

	/**
	 * Getter for validation
	 *
	 * @return string validation
	 */
	public function getValidation() {
		return $this->validation;
	}
	
	/**
	 * Setter for cssid
	 *
	 * @param string $cssid cssid
	 * @return void
	 */
	public function setCssid($cssid) {
		$this->cssid = $cssid;
	}

	/**
	 * Getter for cssid
	 *
	 * @return string cssid
	 */
	public function getCssid() {
		return $this->cssid;
	}
	
	/**
	 * Setter for innertag
	 *
	 * @param string $innertag innertag
	 * @return void
	 */
	public function setInnertag($innertag) {
		$this->innertag = $innertag;
	}

	/**
	 * Getter for innertag
	 *
	 * @return string innertag
	 */
	public function getInnertag() {
		return $this->innertag;
	}
	
}
?>