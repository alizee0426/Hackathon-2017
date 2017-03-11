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

<?php $var1 = $_POST["username"];
      $var2 = $_POST["password"];
      
      if(var1 == "abresto"){
        if( var2 == "123"){
          echo "Bienvenue";
        }
      }
      else{
   ?>
          
          <h1> Espace - Restaurateurs</h1>
      <form method="POST" action="restaurateurs.php" class="login-form">
        <input type="text" name="username" placeholder="username"/>
        <input type="password" name="password" placeholder="password"/>
        <button>login</button>
        <p class="message">Pas encore inscrit? <a href="">Crée un compte</a></p>
      </form>
<?php } ?>

    </div>
  </div>

</body>
</html>
