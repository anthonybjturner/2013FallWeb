<?php
	include_once '../../inc/_global.php';
	
	$model 	= Keywords::Get();
	$view	= 'list.php';
	include '../Shared/_Layout.php';
