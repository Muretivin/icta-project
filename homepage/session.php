<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>


     <p><h1>Hello, <?php echo $_SESSION['name']; ?></h1><br></p>

     <p><a href="logout.php" class ="log">Logout</a><br></p>
     <p><button class="cn"><a href="createports.php"> port</a></button><br></p>
      <p><button class="cn"><a href="view.php"> view</a></button><br></p>


</body>

</html>

<?php 

}else{

     header("Location: HOME.php");

     exit();

}


 ?>