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

  if($conn === false)
{
    die(print_r(sqlsrv_errors(), true));
}  
      $sql_select = "SELECT * FROM client";
 $stmt = $conn->query($sql_select);
 $registrants = $stmt->fetchAll(); 
 if(count($registrants) > 0) {
     echo "<h2>People who are registered:</h2>";
     echo "<table>";
     echo "<tr><th>Name</th>";
     echo "<th>Email</th>";
     foreach($registrants as $registrant) {
         echo "<tr><td>".$registrant['username']."</td>";
         echo "<td>".$registrant['password']."</td>";
     }
      echo "</table>";
 } else {
     echo "<h3>No one is currently registered.</h3>";
 } ?>
          
          <h1> Espace - Restaurateurs</h1>
      <form method="POST" action="restaurateurs.php" class="login-form">
        <input type="text" name="username" placeholder="username"/>
        <input type="password" name="password" placeholder="password"/>
        <button>login</button>
        <p class="message">Pas encore inscrit? <a href="">Crée un compte</a></p>
      </form>


    </div>
  </div>

</body>
</html>
