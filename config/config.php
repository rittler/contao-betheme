<?php

if(TL_MODE == 'BE') {

	if(strpos(Environment::getInstance()->request, 'main') !== false) {
		$GLOBALS['TL_CSS'][] = 'system/modules/rico_betheme/assets/c/main.css';
	} else {
		$GLOBALS['TL_CSS'][] = 'system/modules/rico_betheme/assets/c/login.css';
	}

}