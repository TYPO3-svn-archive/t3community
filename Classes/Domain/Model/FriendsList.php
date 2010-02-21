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
 * FriendsList
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_T3community_Domain_Model_FriendsList extends Tx_Extbase_DomainObject_AbstractValueObject {
	
	/**
	 * wir sind Freunde
	 * @var boolean
	 */
	protected $friend;
	
	/**
	 * Ich möchte ihn o. sie als Freund
	 * @var boolean
	 */
	protected $request;
	
	/**
	 * er o. sie wuenscht mich als Freund
	 * @var boolean
	 */
	protected $initiation;
	
	/**
	 * möchte keine Ahnfrage mehr von ihm o.ihr
	 * @var boolean
	 */
	protected $blacklist;
	
	/**
	 * darf folgende Daten sehen
	 * @var string
	 */
	protected $allowprofiledata;
	
	/**
	 * user
	 * @var Tx_T3community_Domain_Model_FrontendUser
	 */
	protected $user;
	
	
	
	/**
	 * Setter for friend
	 *
	 * @param boolean $friend wir sind Freunde
	 * @return void
	 */
	public function setFriend($friend) {
		$this->friend = $friend;
	}

	/**
	 * Getter for friend
	 *
	 * @return boolean wir sind Freunde
	 */
	public function getFriend() {
		return $this->friend;
	}
	
	/**
	 * Returns the boolean state of friend
	 *
	 * @return bool The state of friend
	 */
	public function isFriend() {
		$this->getFriend();
	}
	
	/**
	 * Setter for request
	 *
	 * @param boolean $request Ich möchte ihn o. sie als Freund
	 * @return void
	 */
	public function setRequest($request) {
		$this->request = $request;
	}

	/**
	 * Getter for request
	 *
	 * @return boolean Ich möchte ihn o. sie als Freund
	 */
	public function getRequest() {
		return $this->request;
	}
	
	/**
	 * Returns the boolean state of request
	 *
	 * @return bool The state of request
	 */
	public function isRequest() {
		$this->getRequest();
	}
	
	/**
	 * Setter for initiation
	 *
	 * @param boolean $initiation er o. sie wuenscht mich als Freund
	 * @return void
	 */
	public function setInitiation($initiation) {
		$this->initiation = $initiation;
	}

	/**
	 * Getter for initiation
	 *
	 * @return boolean er o. sie wuenscht mich als Freund
	 */
	public function getInitiation() {
		return $this->initiation;
	}
	
	/**
	 * Returns the boolean state of initiation
	 *
	 * @return bool The state of initiation
	 */
	public function isInitiation() {
		$this->getInitiation();
	}
	
	/**
	 * Setter for blacklist
	 *
	 * @param boolean $blacklist möchte keine Ahnfrage mehr von ihm o.ihr
	 * @return void
	 */
	public function setBlacklist($blacklist) {
		$this->blacklist = $blacklist;
	}

	/**
	 * Getter for blacklist
	 *
	 * @return boolean möchte keine Ahnfrage mehr von ihm o.ihr
	 */
	public function getBlacklist() {
		return $this->blacklist;
	}
	
	/**
	 * Returns the boolean state of blacklist
	 *
	 * @return bool The state of blacklist
	 */
	public function isBlacklist() {
		$this->getBlacklist();
	}
	
	/**
	 * Setter for allowprofiledata
	 *
	 * @param string $allowprofiledata darf folgende Daten sehen
	 * @return void
	 */
	public function setAllowprofiledata($allowprofiledata) {
		$this->allowprofiledata = $allowprofiledata;
	}

	/**
	 * Getter for allowprofiledata
	 *
	 * @return string darf folgende Daten sehen
	 */
	public function getAllowprofiledata() {
		return $this->allowprofiledata;
	}
	
	/**
	 * Setter for user
	 *
	 * @param Tx_T3community_Domain_Model_FrontendUser $user user
	 * @return void
	 */
	public function setUser(Tx_T3community_Domain_Model_FrontendUser $user) {
		$this->user = $user;
	}

	/**
	 * Getter for user
	 *
	 * @return Tx_T3community_Domain_Model_FrontendUser user
	 */
	public function getUser() {
		return $this->user;
	}
	
}
?>