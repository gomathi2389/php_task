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

    public function getPersonName() {
        return $this->getName();
    }
}

$employee = new Employee();
$employee->setName("Gomathi");
$employee->setEmployeeId("ACE11680");

echo "Employee Name: " . $employee->getName();
echo "Employee ID: " . $employee->getEmployeeId();
echo "Person's Name using Employee method: " . $employee->getPersonName();