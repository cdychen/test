<?php
$_['hybridauth_config'] = array(
		"base_url" => "http://www.5rooms.local/index.php?route=auth/auth/process",

		"providers" => array (
				// openid providers
				"OpenID" => array (
						"enabled" => false
				),

				"AOL"  => array (
						"enabled" => false
				),

				"Yahoo" => array (
						"enabled" => false,
						"keys"    => array ( "id" => "", "secret" => "" )
				),

				"Google" => array (
						"enabled" => true,
						"keys"    => array ( "id" => "google account", "secret" => "11111111" )
				),

				"Facebook" => array (
						"enabled" => true,
						"keys"    => array ( "id" => "joshin@yeah.net", "secret" => "joshin1254" )
				),

				"Twitter" => array (
						"enabled" => false,
						"keys"    => array ( "key" => "", "secret" => "" )
				),

				// windows live
				"Live" => array (
						"enabled" => false,
						"keys"    => array ( "id" => "", "secret" => "" )
				),

				"MySpace" => array (
						"enabled" => false,
						"keys"    => array ( "key" => "", "secret" => "" )
				),

				"LinkedIn" => array (
						"enabled" => false,
						"keys"    => array ( "key" => "", "secret" => "" )
				),

				"Foursquare" => array (
						"enabled" => false,
						"keys"    => array ( "id" => "", "secret" => "" )
				),
		),

		// if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
		"debug_mode" => false,

		"debug_file" => ""
	);