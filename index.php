<?php

// require_once('app/classes/class.filereader.php');
require_once 'bootstrap.php';

use classes\FileReader;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] == 'get_suggestions') {
	$pressedButtons = array();

	if (!empty($_POST['btn_ids'])) {
		$pressedButtons = $_POST['btn_ids'];
	}

	if (!empty($pressedButtons)) {
		$objFReader = new FileReader();
		$objFReader->setPressedDigits($pressedButtons);

		$suggestions = $objFReader->findSuggestions();
	}

	return require_once('app/views/suggestions_list.php');
}

require_once('app/views/view.php');

?>