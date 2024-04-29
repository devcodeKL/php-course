<?php

class Person {

    public $firstName;
    public $middleName;
    public $lastName;

    public function __construct($firstName, $middleName, $lastName) {
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
    }

    public function printName() {
        return "Your full name is $this->firstName $this->lastName.";
    }

}

class Developer extends Person {

    public function printName() {
        return "Your name is $this->firstName $this->middleName $this->lastName and you are a developer.";
    }
    
}

class Engineer extends Person {
    
    public function printName() {
        return "You are an engineer named $this->firstName $this->middleName $this->lastName.";
    }

}

$person = new Person('Senku', '', 'Ishigami');
$developer = new Developer('John', 'Finch', 'Smith');
$engineer = new Engineer('Harold', 'Myers', 'Reese');