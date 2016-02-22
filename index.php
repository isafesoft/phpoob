<?php

/**
* 
*/
class  ShopProduct 
{
	public $title;
	public $pname;
	public $vname;
	public $price;

	function __construct($title)
	{
		$this->title = 	$title;# code...

	}

	function getSummaryLine()
	{
		$base = "{$this->title}" . "pname";
	}

	/**
	* 
	*/
	class CdProduct extends ShopProduct
	{
		public $playLength;
		function __construct($title, $playLength)
		{
			parent::__construct($title);
			$this->playLength = $playLength;
		}

		function getPlayLength()
		{
			return $this->playLength;
		}
	}

	/**
	* 
	*/
	class ClassName extends AnotherClass
	{
		
		function __construct(argument)
		{
			# code...
		}
	}


}