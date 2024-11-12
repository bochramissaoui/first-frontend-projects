<?php
session_start ();
$bdd=new PDO('mysql:host=localhost;dbname=clients;port=3308','root','');
if (isset($_GET['id']) AND $_GET['id'] > 0){
  $getid = intval($_GET['id']);
  $requser = $bdd->prepare('SELECT * FROM bank WHERE id=?'); 
  $requser->execute(array($getid));
  $userinfo = $requser->fetch();
  }

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="hm.css">
	<meta charset="utf-8">
	<title>COMPTE</title>
</head>
<body>
  <a  href="test.php"><input type="submit" name="sub" class="client" value="Déconnexion"></a>
<h1>Bienvenue Cher Client </h1>
<section class="off">
     <div class="container-onglets">
        <div class="onglets active"> Votre Solde</div>
        <div class="onglets">Historique Des prelevements</div>
        <div class="onglets b">Historique des virements</div>
    </div>
 <div class="offre">
<div class="offre">

  
  <div class="hh">
    <div class="contenu active-contenu">
      <p>SOLDE :</p>
        <h2><?php echo  $userinfo['Solde'] ;?></h2>
        <p>Pour Plus d'information :</p>
        <hr>
        <div class="Q">
        
        <h3 class="A"> Contactez Nous par mail Ou appelez 50 000 000</h3>
     
       
       
    </div>
</div>

    <div class="contenu">
<table>
  <tr>
    <th>DATE</th>
    <th>MONTANT</th>
  </tr>
  <tr>
    <td><?php echo  $userinfo['DateP'] ;?></td>
    <td><?php echo  $userinfo['MontantP'] ;?> </td>
  </tr>
  <tr>
    <td><?php echo  $userinfo['DateP2'] ;?></td>
    <td><?php echo  $userinfo['MontantP2'] ;?> </td>
  </tr>
  <tr>
    <td><?php echo  $userinfo['DateP3'] ;?></td>
    <td><?php echo  $userinfo['MontantP3'] ;?> </td>
  </tr>
  <tr>
    <td><?php echo  $userinfo['DateP4'] ;?></td>
    <td><?php echo  $userinfo['MontantP4'] ;?> </td>
  </tr>
  <tr>
    <td><?php echo  $userinfo['DateP5'] ;?></td>
    <td><?php echo  $userinfo['MontantP5'] ;?> </td>
  </tr>
  <tr>
    <td><?php echo  $userinfo['DateP6'] ;?></td>
    <td><?php echo  $userinfo['MontantP6'] ;?> </td>
  </tr>
  
</table>
 <p>Pour Plus d'information :</p>
        <hr>
   <div class="Q">
        
        <h3 class="A"> Contactez Nous par mail Ou appelez 50 000 000</h3>
     
       
       
    </div>
    </div>

    <div class="contenu">
<table>
  <tr>
    <th>DATE</th>
    <th>MONTANT</th>
  </tr>
    <tr>
    <td><?php echo  $userinfo['DateP'] ;?></td>
    <td><?php echo  $userinfo['MontantP'] ;?> </td>
  </tr>
  <tr>
    <td><?php echo  $userinfo['DateP2'] ;?></td>
    <td><?php echo  $userinfo['MontantP2'] ;?> </td>
  </tr>
  <tr>
    <td><?php echo  $userinfo['DateP3'] ;?></td>
    <td><?php echo  $userinfo['MontantP3'] ;?> </td>
  </tr>
  <tr>
    <td><?php echo  $userinfo['DateP4'] ;?></td>
    <td><?php echo  $userinfo['MontantP4'] ;?> </td>
  </tr>
  <tr>
    <td><?php echo  $userinfo['DateP5'] ;?></td>
    <td><?php echo  $userinfo['MontantP5'] ;?> </td>
  </tr>
  <tr>
    <td><?php echo  $userinfo['DateP6'] ;?></td>
    <td><?php echo  $userinfo['MontantP6'] ;?> </td>
  </tr>
</table>
 <p>Pour Plus d'information :</p>
        <hr>
   <div class="Q">
        
        <h3 class="A"> Contactez Nous par mail Ou appelez 50 000 000</h3>
     
       
       
    </div>
    </div>
       </div>
    

    </div>
    </section>
     <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 3){
        counter = 1;
      }
    }, 5000);
    const onglets = Array.from(document.querySelectorAll(".onglets"));
const contenu = Array.from(document.querySelectorAll(".contenu"));


onglets.forEach(onglet => {
  onglet.addEventListener("click", tabsAnimation)
})

let index = 0;

function tabsAnimation(e){

    const el = e.target;
    
    onglets[index].classList.remove("active");
    contenu[index].classList.remove("active-contenu");
    
    index = onglets.indexOf(el);
    
    onglets[index].classList.add("active")
    contenu[index].classList.add("active-contenu");
    
}
    </script>

</body>
</html>