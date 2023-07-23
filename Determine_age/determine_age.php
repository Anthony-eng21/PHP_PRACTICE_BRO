<?php

class Person
{
	private $name;
	private $dob;

	function __construct($name, $dob)
	{
		$this->name = $name;
		$this->dob = $dob;
	}

	public function get_name()
	{
		return $this->name;
	}

	public function get_dob()
	{
		return $this->dob;
	}

	public function get_age()
	{
		// Challenge: define this function
		// strtotime() Parse about any English textual datetime description into a Unix timestamp
		// The year right now minus the Y that the use put in the MM-DD-YY format

		return $year = (date('Y') - date('Y', strtotime($this->dob)));
	}
}

// We can access these methods here becasue objects $p1 and $p2 are instances of the Person 
// class, and as such, they have access to the public methods defined in that class. get_age() name etc
function compare_ages($p1, $p2)
{
	// Challenge: define this function
	if ($p1->get_age() > $p2->get_age()) {
		return $p1->get_name() . ' is older than ' . $p2->get_name();
	} else if ($p1->get_age() > $p2->get_age()) {
		return $p1->get_name() . ' is younger than ' . $p2->get_name();
	}
	
	return $p1->get_name() . ' and ' . $p2->get_name() . ' are the same age.';
}



$joe = new Person('Joe', '1985-10-20');
$erin = new Person('Erin', '1991-08-28');
$teresa = new Person('Teresa', '2017-03-06');
$lou = new Person('Lou', '2020-07-12');


echo $joe->get_name() . ' is ' . $joe->get_age() . '<br/>';
echo $erin->get_name() . ' is ' . $erin->get_age() . '<br/>';
echo $teresa->get_name() . ' is ' . $teresa->get_age() . '<br/>';
echo $lou->get_name() . ' is ' . $lou->get_age() . '<br/>'; 

echo compare_ages($joe, $erin);
