<?php

if (function_exists('wp_cache_clear_cache')) {
	wp_cache_clear_cache();
}

echo 'Cache has been deleted! 🎉<br>Redirecting in 2 sec.<meta http-equiv="refresh" content="2;url=../"> ';
