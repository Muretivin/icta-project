<?php 

include "conf.php";

    if (isset($_POST['update'])) {

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

        $sql = "UPDATE `portdata` SET `employeeNumber`='$employeeNumber',`assignee`='$assignee',`portnumber`='$portnumber',`cabinetroom`='$cabinetroom',`floor`='$floor',`department`='$department',`state`='$state',`assignedDevice`='$assignedDevice',`ifIpPhone`='$ifIpPhone',`offices`='$offices' WHERE `id`='$portdata_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `portdata` WHERE `id`='$portdata_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $employeeNumber = $row['employeeNumber'];

            $assignee = $row['assignee'];

            $portnumber = $row['portnumber'];

            $cabinetroom = $row['cabinetroom'];

            $floor = $row['floor'];

            $department = $row['department'];

            $state = $row['state'];

            $assignedDevice = $row['assignedDevice'];

            $ifIpPhone = $row['ifIpPhone'];

            $offices = $row['offices'];

            $id = $row['id'];

        } 

    ?>

        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            employeeNumber:<br>

    <input type="number" name="employeeNumber"  value="<?php echo $employeeNumber; ?>">
    <input type="hidden" name="portdata_id" value="<?php echo $id; ?>">

    <br>

    Assignee:<br>

    <input type="text" name="assignee" value="<?php echo $assignee; ?>">

    <br>

    PortNumber:<br>

    <input type="text" name="portnumber" value="<?php echo $portnumber; ?>">

    <br>

    CabinetRoom:<br>

    <input type="radio" name="cabinetroom" value ="smallcabinet"  <?php if($cabinetroom == 'smallcabine'){ echo "checked";} ?>>
    <label for="smallcabinet"> smallcabinet </label>

    <br>
    <input type="radio" name="cabinetroom" value ="maincabinet"  <?php if($cabinetroom == 'maincabinet'){ echo "checked";} ?>>
    <label for="maincabinet"> maincabinet </label>

    <br>
    Floor:<br>
    <label for="floor">Choose floor:</label>
<select id="floor" name="floor" size="4" single required >
  <option name="floor" <?php if($floor == 'Gfloor'){ echo "selected";} ?>>groundfloor</option>
  <option name="floor" <?php if($floor == 'first'){ echo "selected";} ?>>first</option>
  <option name="floor" <?php if($floor == 'second'){ echo "selected";} ?>>second</option>
  <option name="floor" <?php if($floor == 'third'){ echo "selected";} ?>>third</option>
</select>
<br>
    

    Department:<br>

    <label for="department">Choose department:</label>
<select id="department" name="department" size="6" single required >
  <option name="department" value="customercare" <?php if($department == 'customercare'){ echo "selected";} ?>>customer Care</option>
  <option name="department" value="HRM" <?php if($department == 'HRM'){ echo "selected";} ?>>HRM</option>
  <option name="department" value="mail" <?php if($department == 'mail'){ echo "selected";} ?>>mail</option>
  <option name="department" value="finance" <?php if($department == 'finance'){ echo "selected";} ?>>finance</option>
  <option name="department" value="ict" <?php if($department == 'ict'){ echo "selected";} ?>>ict</option>
  <option name="department" value="accounting" <?php if($department == 'accounting'){ echo "selected";} ?>>accounting</option>
</select>

    <br>

    State:<br>

    <input type="radio" name="active" value="active" <?php if($state == 'active'){ echo "checked";} ?>>Active

    <input type="radio" name="inactive" value="inactive" <?php if($state == 'inactive'){ echo "checked";} ?>>Inactive

    <input type="radio" name="activeUnused" value="activeUnused" <?php if($state == 'activeUnused'){ echo "checked";} ?>>ActiveUnused

    <br><br><br>
    assignedDevice:<br>
    <label for="assignedDevice">Choose device:</label>
<select id="assignedDevice" name="assignedDevice" size="6" single required>
  <option value="pc" <?php if($assignedDevice == 'pc'){ echo "checked";} ?>>PC</option>
  <option value="printer" <?php if($assignedDevice == 'printer'){ echo "checked";} ?>>printer</option>
  <option value="IP phone" <?php if($assignedDevice == 'IP phone'){ echo "checked";} ?>>IP phone</option>
  <option value="Digital phone" <?php if($assignedDevice == 'Digital phone'){ echo "checked";} ?>>digital phone</option>
  <option value="cisco" <?php if($assignedDevice == 'cisco'){ echo "checked";} ?>>cisco</option>
  <option value="laptop" <?php if($assignedDevice == 'laptop'){ echo "checked";} ?>>laptop</option>
</select>

    

    <br>
    IfIpPhone:<br>

    <label for="ifIpPhone">Choose device:</label>
<select id="ifIpPhone" name="ifIpPhone" size="6" single required>
<option value="pc" <?php if($ifIpPhone == 'pc'){ echo "checked";} ?>>PC</option>
  <option value="printer" <?php if($ifIpPhone == 'printer'){ echo "checked";} ?>>printer</option>
  <option value="IP phone" <?php if($ifIpPhone == 'IP phone'){ echo "checked";} ?>>IP phone</option>
  <option value="Digital phone" <?php if($ifIpPhone == 'Digital phone'){ echo "checked";} ?>>digital phone</option>
  <option value="cisco" <?php if($ifIpPhone == 'cisco'){ echo "checked";} ?>>cisco</option>
  <option value="laptop" <?php if($ifIpPhone == 'laptop'){ echo "checked";} ?>>laptop</option>
</select>

    <br>
    Offices:<br>

    <input type="text" name="offices" value="<?php echo $offices; ?>">

    <br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?> 