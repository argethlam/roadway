<?php

namespace classes;

class FileReader 
{
	private $buttons = array();

	private $file = NULL;

	private $fileName = 'dictionary.txt';

	private $fileContent = NULL;

	private $mapping = array();

	public function __construct() 
	{
		$this->setMapping();
	}

	private function setMapping()
	{
		$this->mapping = array(
			1 => '',
			2 => array(
				'a',
				'b',
				'c'
			),
			3 => array(
				'd',
				'e',
				'f'
			),
			4 => array(
				'g',
				'h',
				'i'
			),
			5 => array(
				'j',
				'k',
				'l'
			),
			6 => array(
				'm',
				'n',
				'o'
			),
			7 => array(
				'p',
				'q',
				'r',
				's'
			),
			8 => array(
				't',
				'u',
				'v'
			),
			9 => array(
				'x',
				'y',
				'z'
			),
			0 => '',
			'*' => '',
			'space' => ' '
		);
	}

	public function setPressedDigits($digits = array())
	{
		if (!empty($digits))
			$this->buttons = $digits;
	}

	private function loadFile()
	{
		$this->file = fopen(ABS_PATH . $this->fileName, 'r');

		if (empty($this->fileContent))
			$this->fileContent = fread($this->file, filesize(ABS_PATH . $this->fileName));
		
		fclose($this->file);
	}

	public function findSuggestions()
	{
		$this->loadFile();

		foreach ($this->buttons AS $num) {
			$letters = $this->mapping[$num];
			
			foreach ($letters AS $char) {
				while (($line = fgets($this->fileContent)) !== false) {
					var_dump($line);
				}

			}
		}

	}
}
