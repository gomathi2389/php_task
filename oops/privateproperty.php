<?php
class MyClass {
    private $property;

    public function setProperty($value) {
        $this->property = $value;
    }

    public function getProperty() {
        return $this->property;
    }
}

$instance = new MyClass();
$instance->setProperty('welcome');
