<?php 

include "conf.php";

$sql = "SELECT * FROM portdata";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>ports</h2>

<table class="table">

    <thead>

        <tr>

        <th>id</th>

        <th>employeeNumber</th>

        <th>assignee</th>

        <th>portnumber</th>

        <th>cabinetroom</th>

        <th>floor</th>

        <th>department</th>

        <th>state</th>

        <th>assignedDevice</th>

        <th>ifIpPhone</th>

        <th>offices</th>

        <th>Action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['employeeNumber']; ?></td>

                    <td><?php echo $row['assignee']; ?></td>

                    <td><?php echo $row['portnumber']; ?></td>

                    <td><?php echo $row['cabinetroom']; ?></td>

                    <td><?php echo $row['floor']; ?></td>

                    <td><?php echo $row['department']; ?></td>

                    <td><?php echo $row['state']; ?></td>

                    <td><?php echo $row['assignedDevice']; ?></td>

                    <td><?php echo $row['ifIpPhone']; ?></td>

                    <td><?php echo $row['offices']; ?></td>

                

                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>