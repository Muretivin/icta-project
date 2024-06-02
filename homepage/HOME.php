<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home page</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="main">
      <div class="navbar">
        <div class="icon">
          <h2 class="logo">Ethernet Management</h2>
        </div>
        <div class="menu">
          <ul>
            <li><a href="HOME.php">HOME</a></li>
            <li><a href="ABOUT.php">ABOUT</a></li>
            <li><a href="SERVICE.php">SERVICE</a></li>
            <li><a href="CONTACT.php">CONTACT</a></li>
          </ul>
        </div>
        
      </div>
      <div class="content">
        <h1>Make Enternet Management Easy &<br /><span> Efficient</span></h1>
        <p class="par">
          We reduce the amount of active unused ports in you organization
          <br />and ensure you keep good track of your ports <br />
          and you know the asignees to the ports.<br />This reduces the visits
          to server rooms and cabinet rooms hence <br />increasing the security
          of the equipments.<br />Main is reduce workload and save on time.
        </p>
        <button class="cn"><a href="create.php"> REGISTER</a></button>
        <form action ="login.php" method="post">
        <div class="form">
          <h3>Login</h3>
          <form method="post" action="login.php">
                    <?php if (isset($_GET['error'])) { ?>

                      <p class="error"> <?php echo $_GET['error']; ?></p>

                    <?php } ?>
                    <input type="text" name="uname" placeholder="enter your username" />
                    <input type="password" name="password" placeholder="enter your password" />
                    <button type ="submit" value ="login" class="btnn">login </button>
          </form>

          <p class="link">You don't have an account
          <br />
          <a href="create.php"> Sign up</a> here </a></p>
          <a href="index.php"> forgot password</a> here </a></p>
        </div>
          
      </div>
    </div>
  </body>
</html>
