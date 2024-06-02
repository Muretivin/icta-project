<?php 

include "conf.php"; 

if (isset($_GET['id'])) {

    $portdata_id = $_GET['id'];

    $sql = "DELETE FROM `portdata` WHERE `id`='$portdata_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>

