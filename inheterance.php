<?php
	class Soccer {
		public $cleats;
		public $shinguards;
		public $brand;
		public $size;
		public $ball;
		public $number;
		public $nationality;

	function __construct($cleats, $shinguards, $brand, $size, $ball, $number, $nationality) {
			$this­>cleatsName = $cleats;
			$this­>shinguardsName = $shinguards;
			$this­>brandName = $brand;
			$this­>sizeName = $size;
			$this­>ballName = $ball;
			$this­>numberName = $number;
			$this­>nationalityName = $nationality;
	}

	function getName() {
	return "Im from " . $this­>nationalityName;
    " and im number 16 " . $this­>lastName;
	}
}
	class soccer extends Sports {
		function greet() {
		return $this­>shoot;
	    }

	class shoes extends Soccer {
		function greet() {
		return $this­>cleats;
	    }

	class club extends fifa{
		function greet() {
		return $this­>barcelona;
	    }






