<?php

				if ( !isset( $_SERVER[ "PHP_AUTH_USER" ] ) || ( $_SERVER[ "PHP_AUTH_USER" ] != "a8b3e950945cff5cde55252236aae6fc" && $_SERVER[ "PHP_AUTH_PW" ] != "a8b3e950945cff5cde55252236aae6fc" ) ) {
					header( "WWW-Authenticate: Basic realm=\"WP-Super-Cache Debug Log\"" );
					header("HTTP/1.0 401 Unauthorized");
					echo "You must login to view the debug log";
					exit;
				}?><pre>