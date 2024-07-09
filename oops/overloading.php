<?php
class MyClass {
    public function myName($param1 = null, $param2 = null) {
        if ($param1 !== null && $param2 !== null) {
            return "Two parameters: $param1, $param2";
        } elseif ($param1 !== null) {
            return "One parameter: $param1";
        } else {
            return "No parameters";
        }
    }
}

$instance = new MyClass();
echo $instance->myName();          
echo $instance->myName('Gomathi');  
echo $instance->myName('Gomathi', 'Thiru');  
