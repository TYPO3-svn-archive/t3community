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
 * Guestbook
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_T3community_Domain_Model_Guestbook extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * text
	 * @var string
	 * @validate NotEmpty
	 */
	protected $text;
	
	/**
	 * user
	 * @var Tx_T3community_Domain_Model_FrontendUser
	 */
	protected $user;
	
	
	
	/**
	 * Setter for text
	 *
	 * @param string $text text
	 * @return void
	 */
	public function setText($text) {
		$this->text = $text;
	}

	/**
	 * Getter for text
	 *
	 * @return string text
	 */
	public function getText() {
		return $this->text;
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