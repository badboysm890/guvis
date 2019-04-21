<html>
<head>
  <?php
  include_once("db_connect.php");
  ?>

  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BadBoy17G</title>
  <link href="https://unpkg.com/nes.css@2.1.0/css/nes.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</head>
<body class="myImage" style="font-family: 'Press Start 2P', cursive;" background="assets/bg.png">
  <div class="container-fluid" >
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">

    <a class="navbar-brand"  href="#">Guvi</a>
    <ul class=" navbar-nav ml-auto" style="font-family: 'Press Start 2P', cursive; ">
      <button type="button" class="nes-btn is-primary b1">Home</button>
      <button type="button" class="nes-btn is-success b1" href="#">Profile</button>
      <a href="login.php"><button type="button" class="nes-btn is-warning b1" href="login.php">Login</button></a>
      <a href="index.php"><button type="button" class="nes-btn is-error b1">Sign Up</button></a>

    </ul>
  </nav>

  <?php
  include_once("db_connect.php");


  $sql = "SELECT * FROM users WHERE user_email = '{$_SESSION['email']}'";
  $res = mysqli_query($sql);
  $user = mysqli_fetch_assco($res);



  while($row = mysqli_fetch_array($result))
  {
  echo "<div>";
  echo "<br>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "</tr>";
  }
  echo "</table>";

  mysqli_close($conn);
  ?>

</body>
</html>
