<?php
// Task 3: Superglobal Variables in PHP
// Create a PHP script that retrieves the user's name and email from the HTML form in Task 1 using the $_POST superglobal variable. 
// Create a new instance of the Person class and use the setName() and setEmail() methods to set the name and email properties based on the form data. 
// Use the getName() and getEmail() methods to display the properties on the webpage.

class Person {
    public $name;
    public $email;

    public function setName($name){
        $this->name = $name;
    }
    public function setEmail($email){
        $this->email = $email;
    }

    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
}

$name = $email = "";
$output_name = $output_email = "";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $obj = new Person();
    $obj -> setName($name);
    $obj -> setEmail($email);   
    $output_name = $obj->getName();
    $output_email = $obj->getEmail();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 5</title>
</head>
<body>
    <form action="" method="post">
        <h3>Output Form Data</h3>
        <?php 
            echo 'My Name is: '. $output_name;
            echo "<br>";
            echo 'My Email Address is: '. $output_email;
        ?>
        <br>
        <h3>Input Form Data</h3>
        <br>
        <label for="name">Name</label><br>
        <input type="name" id="name" name="name"> <br><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email"> <br><br>
        <input type="submit" value="Submit" name= "submit">
    </form>
</body>
</html>