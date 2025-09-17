<?php
require_once 'classes.php';
require_once 'forms.php';

//create an instance of a myClass
$instance = new MyClass();
//create an instance of user_forms
$formInstance = new user_forms();

// call the method myMethod
$instance->heading();
$instance->myMethod();
// call the signup form method
$formInstance->signup_for();
$instance->footer();