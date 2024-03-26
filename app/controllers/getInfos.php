<?php
    class Person {

    private $name;
    private $age;
    private $gender;
    private $weight;
    private $height;

    public function __construct($name, $age, $gender, $height, $weight) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->height = $height / 100;
        $this->weight = $weight;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function calc() {
        return $this->weight / ($this->height ** 2);
    }
}