<?php
class Person {
    protected $name;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}

class Employee extends Person {
    protected $employeeId;

    public function getEmployeeId() {
        return $this->employeeId;
    }

    public function setEmployeeId($employeeId) {
        $this->employeeId = $employeeId;
    }
}

class Manager extends Employee {
    protected $department;

    public function getDepartment() {
        return $this->department;
    }

    public function setDepartment($department) {
        $this->department = $department;
    }
}

$manager = new Manager();
$manager->setName("Gomathi");
$manager->setEmployeeId("ACE11680");
$manager->setDepartment("LAMP");

echo "Manager Name: " . $manager->getName();
echo "Manager ID: " . $manager->getEmployeeId();
echo "Manager Department: " . $manager->getDepartment();