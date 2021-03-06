<?php
/*
 * Kohana-Membership
 * Copyright (C) 2011, Daniel Lo Nigro (Daniel15) <daniel at dan.cx>
 * http://go.dan.cx/kohana-membership
 * 
 * This file is part of Kohana-Membership.
 * 
 * Kohana-Membership is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * Kohana-Membership is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with Kohana-Membership.  If not, see <http://www.gnu.org/licenses/>.
 */

defined('SYSPATH') or die('No direct access allowed.');

return array(
	'providers' => array(
		'openid' => array(
			'url' => '{username}',
			'requires_username' => true,
		),
		'myopenid' => array(
			'url' => 'https://www.myopenid.com/',
		),
		'google' => array(
			'url' => 'https://www.google.com/accounts/o8/id',
		),
		'facebook' => array(
		),
		'twitter' => array(
		),
		'yahoo' => array(
			'url' => 'https://me.yahoo.com/',
		),
		'myspace' => array(
			'url' => 'http://www.myspace.com/{username}',
			'requires_username' => true,
		),
		'aol' => array(
			'url' => 'http://openid.aol.com/{username}',
			'requires_username' => true,
		),
	),
);