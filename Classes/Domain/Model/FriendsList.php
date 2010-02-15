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
	 * friend
	 * @var boolean
	 */
	protected $friend;
	
	/**
	 * request
	 * @var boolean
	 */
	protected $request;
	
	/**
	 * initiation
	 * @var boolean
	 */
	protected $initiation;
	
	/**
	 * blacklist
	 * @var boolean
	 */
	protected $blacklist;
	
	/**
	 * allowprofiledata
	 * @var string
	 */
	protected $allowprofiledata;
	
	/**
	 * user
	 * @var Tx_T3community_Domain_Model_FrontendUser
	 */
	protected $user;
	

	/**
	 * Constructor. Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	 */
	public function __construct() {
		
	}
	
	/**
	 * Getter for friend
	 *
	 * @return boolean friend
	 */
	public function getFriend() {
		return $this->friend;
	}

	/**
	 * Setter for friend
	 *
	 * @param boolean $friend friend
	 * @return void
	 */
	public function setFriend($friend) {
		$this->friend = $friend;
	}
	
	/**
	 * Getter for request
	 *
	 * @return boolean request
	 */
	public function getRequest() {
		return $this->request;
	}

	/**
	 * Setter for request
	 *
	 * @param boolean $request request
	 * @return void
	 */
	public function setRequest($request) {
		$this->request = $request;
	}
	
	/**
	 * Getter for initiation
	 *
	 * @return boolean initiation
	 */
	public function getInitiation() {
		return $this->initiation;
	}

	/**
	 * Setter for initiation
	 *
	 * @param boolean $initiation initiation
	 * @return void
	 */
	public function setInitiation($initiation) {
		$this->initiation = $initiation;
	}
	
	/**
	 * Getter for blacklist
	 *
	 * @return boolean blacklist
	 */
	public function getBlacklist() {
		return $this->blacklist;
	}

	/**
	 * Setter for blacklist
	 *
	 * @param boolean $blacklist blacklist
	 * @return void
	 */
	public function setBlacklist($blacklist) {
		$this->blacklist = $blacklist;
	}
	
	/**
	 * Getter for allowprofiledata
	 *
	 * @return string allowprofiledata
	 */
	public function getAllowprofiledata() {
		return $this->allowprofiledata;
	}

	/**
	 * Setter for allowprofiledata
	 *
	 * @param string $allowprofiledata allowprofiledata
	 * @return void
	 */
	public function setAllowprofiledata($allowprofiledata) {
		$this->allowprofiledata = $allowprofiledata;
	}
	
	/**
	 * Getter for user
	 *
	 * @return Tx_T3community_Domain_Model_FrontendUser user
	 */
	public function getUser() {
		return $this->user;
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
	
}
?>