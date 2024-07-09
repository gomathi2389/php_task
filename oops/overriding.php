<?php
class User {
    protected $name;
    protected $email;

    public function __construct($name,$email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getUser() {
        echo "NAME:" . $this->name;
        echo "EMAIL:" . $this->email;
    }
}
class Admin extends User {
    protected $adminLevel;

    public function __construct($name,$email,$adminLevel) {
        parent::__construct($name,$email);
        $this->adminLevel = $adminLevel;
    }

    public function display() {
        parent::getUser();
        echo "ADMINLEVEL:" . $this->adminLevel;
    }
}

$object = new Admin('Gomathi','gomathi@gmail.com',2); 