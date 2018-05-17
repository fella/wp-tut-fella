<?php

/**
 * @packacge WPtutPlugin
 */
/*
Plugin Name: WPtut Plugin
Plugin URI: http://spurrhouse.com/plugin
Description: From plugins tutorial by Alecad
Version: 1.0.0
Author: Dave Spurr
Author URI: http://spurrhouse.com
License: GPLv2 or later
Text Domain: wptut-plugin
 */

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

defined( 'ABSPATH' ) or die( 'You betta run for accessing this file, you foo!' );

class WPtutPlugin
{
	// methods
	function __construct($string) {
		echo $string;
	}
}

if(class_exists( 'WPtutPlugin' ) ) {
	$wptutPlugin = new WPtutPlugin( 'WPtut Plugin initialized!' );
}