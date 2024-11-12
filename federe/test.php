<?php
session_start ();
$bdd=new PDO('mysql:host=localhost;dbname=clients;port=3308','root','');

if(isset($_POST['connecte'])){
    $login=htmlspecialchars($_POST['login']);
 $mdp=htmlspecialchars($_POST['mdp']); 
  if(!empty($_POST['login']) AND !empty($_POST['mdp'])) {
    $connect=$bdd->prepare("SELECT * FROM bank WHERE Login= ? AND Motdepasse=?");
    $connect->execute(array($login,$mdp));
    $userexist=$connect->rowCount();

    if($userexist){
   $userinfo=$connect->fetch();
   $_SESSION['id']=$userinfo['id'];
   $_SESSION['login']=$userinfo['login'];
   $_SESSION['mdp']=$userinfo['mdp'];
  $_SESSION['Solde']=$userinfo['Solde'];
    $_SESSION['DateP']=$userinfo['DateP'];
      $_SESSION['MontantP']=$userinfo['MontantP'];
   header("Location:home.php?id=".$_SESSION['id']); }
    else {
        $erreur="Mauvais mail ou mot de passe incorrect !";
    }


   

  }
     else {
      $erreur="tout les champs doivent étre completés";
     }
 }


  
 ?>

 <html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="tes.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
    <title>ALB</title>

</head>
<body>
         <h1>BIENVENUE CHER CLIENT</h1>
          <a href="acc.php"> <button class="btn">Page D'Acceuil</button></a>
 <form class=" int" method = "POST" action ="">
           <div class="A">
            <label >Login :  </label><input type="text" class="ch" name="login"></div>
            <br>
            <br>
            <div class="B">
            <label>Mot De Passe : </label> <input type="password" name="mdp" class="K"></div>
            <br>
            <br>
           <input type="submit" name="connecte" value="se connecter" class="button">
        
      
        </form>

         <?php
      if (isset($erreur)){
         echo '<font color ="red" >' .$erreur. "</font>" ;
      }
      ?>
      </body>
</html>