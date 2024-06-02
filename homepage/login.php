<?php 

session_start(); 

include "config.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: HOME.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: HOME.php?error=Password is required");

        exit();

    }

        $sql = "SELECT * FROM staff WHERE username='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: session.php");

                exit();

            }else{

                header("Location: HOME.php?error=Incorect User name or password");

                exit();

            }

        

}else{

    header("Location: HOME.php");

    exit();

}
}
?>