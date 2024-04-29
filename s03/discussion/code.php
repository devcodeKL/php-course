<?php
// [SECTION] Objects
// Object is a compound data type (along with arrays).
// Object is an instance of either a "built-in" or "user-defined" class.

// [SECTION] Objects as Variables
// The code below directly creates an object using the object literal notation which uses the "stdClass".
// This is also an object instantiated on a "built-in" class
$buildingObj = (object)[
	'name' => 'Caswynn Building',
	'floors' => 8,
	'address' => (object)[
		'barangay' => 'Sacred Heart',
		'city' => 'Quezon City',
		'country' => 'Philippines'
	]
];

// [SECTION] Classes
// A "Class" is a programmer-defined data type, which includes local functions(methods) as well as local data(properties).
// "Class" is a blueprint on creating objects with same structure and behavior

// [SECTION] Objects from Classes
class Building {

	// properties/attributes
	// characteristics of the object
	public $name;
	public $floors;
	public $address;

	// A constructor is used during the creation of an object.
	// this will initialize the object's properties with the values provided when an object is instantiated or created
	public function __construct($name, $floors, $address){
		$this->name = $name;
		$this->floors = $floors;
		$this->address = $address;
	}

	// Methods
	// an action that an object can perform.
	public function printName(){
		return "The name of the building is $this->name";
	}
}

// Instantiating the Building Class (Object Creation)
$building = new Building('Caswynn Building', 8, 'Timog Avenue, Quezon City, Philippines');

// [SECTION] Inheritance and Polymorphism

// Inheritance
// The derived(child) classes are allowed to inherit all the properties and methods from a specified base(parent) class.
class Condominium extends Building{
	// $name, $floors and $address are 'inherited' in this class.
	// It means that condominium also have name, floors, and address, just like a regular building

	// Polymorphism
		// Methods inherited by a child class can be overridden to have a behavior different from the method of base(parent) class.
	public function printName(){
		return "The name of the condominium is $this->name";
	}
}

// Instantiating the Condominuim class.
$condominium = new Condominium('Enzo Condo', 5, 'Buendia Avenue, Makati City, Philippines');

?>