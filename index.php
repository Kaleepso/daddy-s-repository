<?php
class MyClass {
    public function heading() {
        echo "Welcome to BBIT DevOps!";
    }
    public function myMethod() {
      echo "<p>This is a new semester!</p>";
    }
    public function footer() {
        echo "<footer>Contact us at <a href = 'mailto:info@bbit.edu.in'>info@bbit.edu.in</a></footer>";
    }
}
//create an instance of a myClass
$instance = new MyClass();

// call the method myMethod
$instance->heading();
$instance->myMethod();
$instance->footer();