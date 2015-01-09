<?php  


	class Person{
		public height = "5'4";
		public gender = "Male";
		public age = "15"; 
		public race ="Latino American";
    }

    class Dog{
    	public gender = "Male";
    	public type = "Terrior/Maltese";
    	public weight = "9.8";
    	public height = "1'1";

    } 

    class Shoes{
    	public price ="$200.00";
    	public brand ="Nike";
    	public type ="Soccer Shoes"
    }

    	function getShoes() {
    	return "{this>brand}" .
    	"{$this>price}";	
    	}

    	$shoe1 =new Shoes();
    	$shoe1->brand="Nike";
    	$shoe1->price="$200.00";

    	class shirts {
    	public size = "S,M,L,XL";
    	public price = "$20-$40";
    	public brand ="Hollister";
    	}

    	function getShirts(){
    		return "{$this>brand}" .
    		"{$this>price}";
    	     }
    	$shirt1 =new Shirt();
    	$shirt1->brand = "Hollister";
    	$shirt1->price = "$20-$40";

    	class nachos{
    		public price = "$5-$10";
    		public meat = "beef";
    		public salsa = "green salsa";
    	}

    	function getNachos() {
    		return "{$this>price}" .
    		"{$this>style}";
    	}

    	$nachos1 =new Nachos();
    	$nachos1->meat = "beef";
    	$nachos1->price ="$5-$10";

    	
    	if (is_string(‘hello’))
		echo “It is a string”;
		else
        echo ‘It is not a string’;
		var_dump(is_string(‘XYZ’));
		var_dump(is_string(‘8008’));
		var_dump(is_string(123));
		var_dump(is_string(false));


		if (is_string(‘bye’))
		echo “It is a string”;
		else
		echo ‘It is not a string’;
		var_dump(is_string(123));
		var_dump(is_string(false));


		if (is_string(‘soccer’))
		echo “It is a string”;
		else
		echo ‘It is not a string’;
	    var_dump(is_string(‘XYZ’));
        var_dump(is_string(‘8008’));
		var_dump(is_string(123));
		var_dump(is_string(false));
?> 


