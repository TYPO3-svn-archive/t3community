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
	 * Alle Daten Abhängig profilevaluelabel
	 * @var string
	 * @validate NotEmpty
	 */
	protected $profielvalue;
	
	/**
	 * rechte vergabe öffentlich vertaulich
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $trust;
	
	/**
	 * profilevaluelabel
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_T3community_Domain_Model_ProfileTemplates>
	 */
	protected $profilevaluelabel;
	
	
	
	/**
	 * Setter for profielvalue
	 *
	 * @param string $profielvalue Alle Daten Abhängig profilevaluelabel
	 * @return void
	 */
	public function setProfielvalue($profielvalue) {
		$this->profielvalue = $profielvalue;
	}

	/**
	 * Getter for profielvalue
	 *
	 * @return string Alle Daten Abhängig profilevaluelabel
	 */
	public function getProfielvalue() {
		return $this->profielvalue;
	}
	
	/**
	 * Setter for trust
	 *
	 * @param boolean $trust rechte vergabe öffentlich vertaulich
	 * @return void
	 */
	public function setTrust($trust) {
		$this->trust = $trust;
	}

	/**
	 * Getter for trust
	 *
	 * @return boolean rechte vergabe öffentlich vertaulich
	 */
	public function getTrust() {
		return $this->trust;
	}
	
	/**
	 * Returns the boolean state of trust
	 *
	 * @return bool The state of trust
	 */
	public function isTrust() {
		$this->getTrust();
	}
	
	/**
	 * Setter for profilevaluelabel
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_T3community_Domain_Model_ProfileTemplates> $profilevaluelabel profilevaluelabel
	 * @return void
	 */
	public function setProfilevaluelabel(Tx_Extbase_Persistence_ObjectStorage $profilevaluelabel) {
		$this->profilevaluelabel = $profilevaluelabel;
	}

	/**
	 * Getter for profilevaluelabel
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_T3community_Domain_Model_ProfileTemplates> profilevaluelabel
	 */
	public function getProfilevaluelabel() {
		return $this->profilevaluelabel;
	}
	
	/**
	 * Adds a ProfileTemplates
	 *
	 * @param Tx_T3community_Domain_Model_ProfileTemplates The ProfileTemplates to be added
	 * @return void
	 */
	public function addProfilevaluelabel(Tx_T3community_Domain_Model_ProfileTemplates $profilevaluelabel) {
		$this->profilevaluelabel->attach($profilevaluelabel);
	}
	
	/**
	 * Removes a ProfileTemplates
	 *
	 * @param Tx_T3community_Domain_Model_ProfileTemplates The ProfileTemplates to be removed
	 * @return void
	 */
	public function removeProfilevaluelabel(Tx_T3community_Domain_Model_ProfileTemplates $profilevaluelabel) {
		$this->profilevaluelabel->detach($profilevaluelabel);
	}
	
}
?>