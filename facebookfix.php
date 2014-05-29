<?php
/**
 * @copyright	Copyright (c) 2014 XS_NRG. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

/**
 * system - facebook fix Plugin
 *
 * @package		Joomla.Plugin
 * @subpakage	XS_NRG.facebookfix
 */
class plgsystemfacebookfix extends JPlugin {

	/**
	 * Constructor.
	 *
	 * @param 	$subject
	 * @param	array $config
	 */
	function __construct(&$subject, $config = array()) {
		// call parent constructor
		parent::__construct($subject, $config);
	}
	
		function onAfterRoute()
	{

		$app = JFactory::getApplication();

		if (($app->getCfg('gzip') == 1) && ($_SERVER['HTTP_USER_AGENT'] == 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)'))
		{
			JFactory::getConfig()->set('gzip', 0);
		}

	}
	
}