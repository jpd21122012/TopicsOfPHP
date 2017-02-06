<?php

$language = isset($_GET['language']) ? $_GET['language'] : 0;

switch ($language) {
	case '0':
		
		echo 'Buen día';
		break;
	case '1':
		
		echo 'Good day';
		break;
	case '2':
		
		echo 'Bon jour';
		break;
	
}
