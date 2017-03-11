<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Espace - restaurateur</title>


  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/style.css">
<script>$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});</script>

</head>

<body>
  <div class="login-page">
    <div class="form">


      <?php

      // PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:meet-eat-sv-bdd.database.windows.net,1433; Database = Meet.Eat.-BDD", "Administrateur", "Corentin2017");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "Administrateur@meet-eat-sv-bdd", "pwd" => "Corentin2017", "Database" => "Meet.Eat.-BDD", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:meet-eat-sv-bdd.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);



$username = $_POST['$username'];
$password = $_POST['password'];


$sql = "INSERT INTO client (username, password)
VALUES ($username, $password)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


        if(1 == 1){

        echo '<h1>Espace - Restaurateurs</h1>
      <form method="POST" action="#" class="login-form">
        <input type="text" name="username" placeholder="username"/>
        <input type="password" name="password" placeholder="password"/>
        <button>login</button>
        <p class="message">Pas encore inscrit? <a href="">Crée un compte</a></p>
      </form>';

    }else{
      echo 'inscription';
    }
      ?>
    </div>
  </div>

</body>
</html>
