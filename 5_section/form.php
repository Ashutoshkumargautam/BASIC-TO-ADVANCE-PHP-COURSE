<?php

if(isset($_POST['submit'])){

$name = $_POST['name'];
$password = $_POST['password'];

echo " Username - " . $name;

echo "<br>";

echo " Password - " . $password;

if(strlen($name) < 5){

    echo "Username has to be longer than five charecters";
}


}

?>
