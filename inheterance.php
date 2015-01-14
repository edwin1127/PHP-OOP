<?php
	class Soccer {
		public $cleats;
		public $shinguards;
		public $brand;
		public $size;
		public $ball;
		public $number;
		public $nationality;
		
	function __construct($cleats, $shinguards, $brand, $size, $ball, $number, $nationality)
	{
			$this->cleatsName = $cleats;
			$this->shinguardsName = $shinguards;
			$this->sizeName = $size;
			$this->ballName = $ball;
			$this->numberName = $number;
			$this->nationalityName = $nationality;
	}

	function getName()
	 {
		return "Im from" . $this->nationalityName . "<br />" . 
		" and im number 16" . $this->numberName;
	}
}

	$messi = new Soccer("nike", "adidas", "lotto", 9, "f-50", 16, "Argentina");
	echo $messi->getName(); 
