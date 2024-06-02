<?php 

include "conf.php";

  if (isset($_POST['submit'])) {

    $employeeNumber = $_POST['employeeNumber'];

    $assignee = $_POST['assignee'];

    $portnumber = $_POST['portnumber'];

    $cabinetroom = $_POST['cabinetroom'];

    $floor = $_POST['floor'];

    $department = $_POST['department'];

    $state = $_POST['state'];

    $assignedDevice = $_POST['assignedDevice'];

    $ifIpPhone = $_POST['ifIpPhone'];

    $offices = $_POST['offices'];



    $sql = "INSERT INTO `portdata`(`employeeNumber`, `assignee`, `portnumber`, `cabinetroom`, `floor`, `department`, `state`, `assignedDevice`, `ifIpPhone`, `offices`) VALUES ('$employeeNumber','$assignee','$portnumber','$cabinetroom','$floor','$department','$state','$assignedDevice','$ifIpPhone','$offices')";

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

<h2>port registration</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Port information:</legend>

    employeeNumber:<br>

    <input type="number" name="employeeNumber">

    <br>

    Assignee:<br>

    <input type="text" name="assignee">

    <br>

    PortNumber:<br>

    <input type="text" name="portnumber">

    <br>

    CabinetRoom:<br>

    <input type="radio" name="cabinetroom" value ="smallcabinet">
    <label for="smallcabinet"> smallcabinet </label>

    <br>
    <input type="radio" name="cabinetroom" value ="maincabinet">
    <label for="maincabinet"> maincabinet </label>

    <br>
    Floor:<br>
    <label for="floor">Choose floor:</label>
<select id="floor" name="floor" size="4" single required>
  <option value="Gfloor">groundfloor</option>
  <option value="first">first</option>
  <option value="second">second</option>
  <option value="third">third</option>
</select>
<br>
    

    Department:<br>

    <label for="department">Choose department:</label>
<select id="department" name="department" size="6" single required>
  <option value="customercare">customer Care</option>
  <option value="HRM">HRM</option>
  <option value="mail">mail</option>
  <option value="finance">finance</option>
  <option value="ict">ict</option>
  <option value="accounting">accounting</option>
</select>

    <br>

    State:<br>

    <input type="radio" name="active" value="active">Active

    <input type="radio" name="inactive" value="inactive">Inactive

    <input type="radio" name="activeUnused" value="activeUnused">ActiveUnused

    <br><br><br>
    assignedDevice:<br>
    <label for="assignedDevice">Choose device:</label>
<select id="assignedDevice" name="assignedDevice" size="6" single required>
  <option value="pc">PC</option>
  <option value="printer">printer</option>
  <option value="IP phone">IP phone</option>
  <option value="Digital phone">digital phone</option>
  <option value="cisco">cisco</option>
  <option value="laptop">laptop</option>
</select>

    

    <br>
    IfIpPhone:<br>

    <label for="ifIpPhone">Choose device:</label>
<select id="ifIpPhone" name="ifIpPhone" size="6" single required>
  <option value="pc">PC</option>
  <option value="printer">printer</option>
  <option value="IP phone">IP phone</option>
  <option value="Digital phone">digital phone</option>
  <option value="cisco">cisco</option>
  <option value="laptop">laptop</option>
</select>

    <br>
    Offices:<br>

    <input type="text" name="offices">

    <br>
    

    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>