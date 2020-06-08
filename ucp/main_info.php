<?php
/**
 *
 * Delete My Account. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017 BrokenCrust
 * @copyright (c) 2020 RMcGirr83
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace brokencrust\deletemyaccount\ucp;

// Define the new UCP tab and single page
class main_info
{
	function module()
	{
		return array(
			'filename' => '\brokencrust\deletemyaccount\ucp\main_module',
			'title' => 'DELETE_MY_ACCOUNT',
			'modes' => array(
				'settings' => array(
					'title'	=> 'DELETE_MY_ACCOUNT',
					'auth' => 'ext_brokencrust/deletemyaccount',
					'cat' => array('UCP_PROFILE'),
				),
			),
		);
	}
}
