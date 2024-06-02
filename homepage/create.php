<?php 

include "configure.php";

  if (isset($_POST['submit'])) {
    

    $first_name = $_POST['first_name'];

    $last_name = $_POST['last_name'];

    $username = $_POST['username'];

    $password = $_POST['password'];

    $gender = $_POST['gender'];

    $sql = "INSERT INTO `staff`(`first_name`, `last_name`, `username`, `password`, `gender`) VALUES ('$first_name','$last_name','$username','$password','$gender')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>

<body>

<h2>Signup Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Personal information:</legend>

    First name:<br>

    <input type="text" name="first_name">

    <br>

    Last name:<br>

    <input type="text" name="last_name">

    <br>

    username:<br>

    <input type="text" name="username">

    <br>

    Password:<br>

    <input type="password" name="password">

    <br>

    Gender:<br>

    <input type="radio" name="gender" value="Male">Male

    <input type="radio" name="gender" value="Female">Female

    <br><br>

    <input type="submit" name="submit" value="submit">
    <button class="cn"><a href="HOME.php"> BACK</a></button>

  </fieldset>
  

</form>

</body>

</html>