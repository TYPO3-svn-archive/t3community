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
 * fe_users
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_T3community_Domain_Model_FrontendUser extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * Profiel
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_T3community_Domain_Model_Profile>
	 */
	protected $Profiel;
	
	/**
	 * FriendsList
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_T3community_Domain_Model_FriendsList>
	 */
	protected $FriendsList;
	
	/**
	 * Guestbook
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_T3community_Domain_Model_Guestbook>
	 */
	protected $Guestbook;
	
	/**
	 * Constructor. Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	 */
	public function __construct() {
		$this->Profiel = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->FriendsList = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->Guestbook = new Tx_Extbase_Persistence_ObjectStorage();
	}
	
	/**
	 * Setter for Profiel
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_T3community_Domain_Model_Profile> $Profiel Profiel
	 * @return void
	 */
	public function setProfiel(Tx_Extbase_Persistence_ObjectStorage $Profiel) {
		$this->Profiel = $Profiel;
	}

	/**
	 * Getter for Profiel
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_T3community_Domain_Model_Profile> Profiel
	 */
	public function getProfiel() {
		return $this->Profiel;
	}
	
	/**
	 * Adds a Profile
	 *
	 * @param Tx_T3community_Domain_Model_Profile The Profile to be added
	 * @return void
	 */
	public function addProfiel(Tx_T3community_Domain_Model_Profile $Profiel) {
		$this->Profiel->attach($Profiel);
	}
	
	/**
	 * Removes a Profile
	 *
	 * @param Tx_T3community_Domain_Model_Profile The Profile to be removed
	 * @return void
	 */
	public function removeProfiel(Tx_T3community_Domain_Model_Profile $Profiel) {
		$this->Profiel->detach($Profiel);
	}
	
	/**
	 * Setter for FriendsList
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_T3community_Domain_Model_FriendsList> $FriendsList FriendsList
	 * @return void
	 */
	public function setFriendsList(Tx_Extbase_Persistence_ObjectStorage $FriendsList) {
		$this->FriendsList = $FriendsList;
	}

	/**
	 * Getter for FriendsList
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_T3community_Domain_Model_FriendsList> FriendsList
	 */
	public function getFriendsList() {
		return $this->FriendsList;
	}
	
	/**
	 * Adds a FriendsList
	 *
	 * @param Tx_T3community_Domain_Model_FriendsList The FriendsList to be added
	 * @return void
	 */
	public function addFriendsList(Tx_T3community_Domain_Model_FriendsList $FriendsList) {
		$this->FriendsList->attach($FriendsList);
	}
	
	/**
	 * Removes a FriendsList
	 *
	 * @param Tx_T3community_Domain_Model_FriendsList The FriendsList to be removed
	 * @return void
	 */
	public function removeFriendsList(Tx_T3community_Domain_Model_FriendsList $FriendsList) {
		$this->FriendsList->detach($FriendsList);
	}
	
	/**
	 * Setter for Guestbook
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_T3community_Domain_Model_Guestbook> $Guestbook Guestbook
	 * @return void
	 */
	public function setGuestbook(Tx_Extbase_Persistence_ObjectStorage $Guestbook) {
		$this->Guestbook = $Guestbook;
	}

	/**
	 * Getter for Guestbook
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_T3community_Domain_Model_Guestbook> Guestbook
	 */
	public function getGuestbook() {
		return $this->Guestbook;
	}
	
	/**
	 * Adds a Guestbook
	 *
	 * @param Tx_T3community_Domain_Model_Guestbook The Guestbook to be added
	 * @return void
	 */
	public function addGuestbook(Tx_T3community_Domain_Model_Guestbook $Guestbook) {
		$this->Guestbook->attach($Guestbook);
	}
	
	/**
	 * Removes a Guestbook
	 *
	 * @param Tx_T3community_Domain_Model_Guestbook The Guestbook to be removed
	 * @return void
	 */
	public function removeGuestbook(Tx_T3community_Domain_Model_Guestbook $Guestbook) {
		$this->Guestbook->detach($Guestbook);
	}
	
}
?>