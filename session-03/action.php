<?php

if(isset($_POST['fname'], $_POST['lname'])){
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];

    echo "Welcome $firstname $lastname !";
} else {
    echo "Please fill in both, first and last name.";
}

?>