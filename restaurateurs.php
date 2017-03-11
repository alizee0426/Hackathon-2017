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


  
  

        <h1>  <?php

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "Administrateur@meet-eat-sv-bdd", "pwd" => "Corentin2017", "Database" => "Meet.Eat.-BDD", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:meet-eat-sv-bdd.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

  if($conn === false)
{
    die(print_r(sqlsrv_errors(), true));
}
 if(!empty($_POST)) {
 try {
     $name = $_POST['username'];
     $password = $_POST['password'];
     $sql_insert = "INSERT INTO client (user, password) 
                    VALUES (?,?)";
     $stmt = $conn->prepare($sql_insert);
     $stmt->bindValue(1, $name);
     $stmt->bindValue(2, $password);
     $stmt->execute();
 }
 catch(Exception $e) {
     die(var_dump($e));
 }
 echo "<h3>Your're registered!</h3>";
 }    ?>Espace - Restaurateurs</h1>
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
