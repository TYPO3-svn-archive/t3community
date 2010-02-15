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
 * Enthält Profiel Daten
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */


class Tx_T3community_Domain_Model_Profile extends Tx_Extbase_DomainObject_AbstractValueObject {
	
	/**
	 * profielvalue
	 * @var string
	 * @validate NotEmpty
	 */
	protected $profielvalue;
	
	/**
	 * trust
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $trust;
	
	/**
	 * profielwertart
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_T3community_Domain_Model_ProfileTemplates>
	 */
	protected $profielwertart;
	

	/**
	 * Constructor. Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	 */
	public function __construct() {
		
	}
	
	/**
	 * Getter for profielvalue
	 *
	 * @return string profielvalue
	 */
	public function getProfielvalue() {
		return $this->profielvalue;
	}

	/**
	 * Setter for profielvalue
	 *
	 * @param string $profielvalue profielvalue
	 * @return void
	 */
	public function setProfielvalue($profielvalue) {
		$this->profielvalue = $profielvalue;
	}
	
	/**
	 * Getter for trust
	 *
	 * @return integer trust
	 */
	public function getTrust() {
		return $this->trust;
	}

	/**
	 * Setter for trust
	 *
	 * @param integer $trust trust
	 * @return void
	 */
	public function setTrust($trust) {
		$this->trust = $trust;
	}
	
	/**
	 * Getter for profielwertart
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_T3community_Domain_Model_ProfileTemplates> profielwertart
	 */
	public function getProfielwertart() {
		return $this->profielwertart;
	}

	/**
	 * Setter for profielwertart
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_T3community_Domain_Model_ProfileTemplates> $profielwertart profielwertart
	 * @return void
	 */
	public function setProfielwertart(Tx_Extbase_Persistence_ObjectStorage $profielwertart) {
		$this->profielwertart = $profielwertart;
	}
	
}
?>