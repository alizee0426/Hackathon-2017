<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Espace - restaurateur</title>


  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/style.css">


</head>

<body>
  <div class="login-page">
    <div class="form">

<h1> Espace - Restaurateurs</h1>
      <form method="POST" action="restaurateurs.php" class="login-form">
        <input type="text" name="username" placeholder="username"/>
        <input type="password" name="password" placeholder="password"/>
        <a href="page04.html"><button>login</button></a>
        <p class="message">Pas encore inscrit? <a href="">Crée un compte</a></p>
      </form>

    </div>
  </div>

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
$connectionInfo = array("UID" => "Administrateur@meet-eat-sv-bdd", "pwd" =>
"Corentin2017", "Database" => "Meet.Eat.-BDD", "LoginTimeout" => 30,
"Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:meet-eat-sv-bdd.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
 
  if(!empty($_POST)) {
 try {
     $name = $_POST['username'];
     $email = $_POST['password'];

     // Insert data
     $sql_insert = "INSERT INTO registration_tbl (username, password) 
                    VALUES (?,?)";
     $stmt = $conn->prepare($sql_insert);
     $stmt->bindValue(1, $name);
     $stmt->bindValue(2, $email);
     $stmt->execute();
 }
 catch(Exception $e) {    print("Insert errorr.");
     die(var_dump($e));
 }
 echo "<h3>Your're registered!</h3>";
 }
?>
</body>
</html>
