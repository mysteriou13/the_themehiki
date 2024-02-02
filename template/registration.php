<?php
// Vérifier si le formulaire a été soumis

$valide = 0;




?>

<div class = "border border-light main_div">

<center>
<div  class = "text-light mb-5 mt-5 d-inline-block title_regis">

Registration

</div>


<div>

<?php if(!isset($_GET['insert']) || $_GET['insert'] != "true"){
?>

<form action  = "" method="POST" class = "text-light w-75">
<div class="form-group row mb-5 d-block">
    <label for="inputPassword" class="col-sm-2 col-form-label"> pseudo* </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="user_login" placeholder="pseudo">
    </div>

    <div class = "text-danger">

    <?php

    if(isset($_POST['user_login'])){
    if(username_exists($_POST['user_login'])){

      echo "pseudo déja pris";

      $valide = $valide-1;

    }else{

      $valide = $valide+1;

    }
  }

    ?>

    </div>

  </div>

  <div class="form-group row mb-5 d-block">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email*</label>
    <div class="col-sm-10">
    
    <div>
    <input type="email" class="form-control" name="email" placeholder="email"
    value = "<?php 
     if(isset($_POST['email']) && email_exists($_POST['email'])){

      echo esc_attr($_POST['email']);

     }
    ?>"
    >
    </div>

    <div class = "text-danger">

    <?php 
    
    if(isset($_POST['email']) && email_exists($_POST['email'])){

    echo "email déja pris";

    $valide = $valide-1;

    }else{

      $valide = $valide+1;

    }
    
    ?>
    </div>

    </div>

  </div>
  <div class="form-group row mb-5 d-block">
    <label for="inputPassword" class="col-sm-2 col-form-label w-100">Password:(8 caratères minimum)*</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="user_pass" placeholder="Password">
    </div>

    <div class = "text-danget">
<?php

if(isset($_POST['user_pass'])  && strlen($_POST['user_pass']) <=7 ){

  echo  "mot de pass tros court";

  $valide = $valide-1;

}else{

  $valide = $valide+1;

}

?>
  </div>

  </div>

  <div class="form-group row mb-5 d-block">
    <label for="inputPassword" class="col-sm-2 col-form-label w-100"> confirmé mot de pass</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="confirmPassword" placeholder="Password">
    </div>

    <div class = "text-danger">
      <?php 
     if (isset($_POST['user_pass']) && isset($_POST['confirmPassword'])) {
      if ($_POST['user_pass'] !== $_POST['confirmPassword']) {
          echo "Les mots de passe ne correspondent pas";
          $valide = $valide-1;
      
        }else{

          $valide = $valide+1;

      }
  }
      ?>
    </div>

  </div>


  <div class="form-group row mb-5 d-block">
    <label for="inputPassword" class="col-sm-2 col-form-label"> site perso</label>
    <div class="col-sm-10">
    
    <input type = "text" class = "w-100 form-control" name  = "site">
  </div>


  <div class="form-group row mb-5 d-block">
    <label for="inputPassword" class="col-sm-2 col-form-label"> site perso</label>
    
       
    <div>
    info perso
    </div>

    <textarea id="story" name="story" rows="5" cols="33">

</textarea>

    </div>


  <div>
  <input type = "submit">
  </div>

  <?php 
  //var_dump($_POST);
  ?>

</form>
<?php 

} 

?>
</div>
  </center>
</div>

<div class = "text-light">
  
<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $valide == 4) {
  // Récupérer les données du formulaire

  echo "valide".$valide;
// Votre tableau initial


$data = $_POST;

// Initialiser le tableau pour wp_insert_user
$user_data = [];

// Parcourir le tableau initial et ajouter les données au tableau pour wp_insert_user


foreach ($data as $key => $value) {
  // Ajouter la clé et la valeur au tableau pour wp_insert_user
  $user_data[$key] = $value;
}

// Insérer l'utilisateur avec wp_insert_user
$user_id = wp_insert_user($user_data);

// Vérifier si l'insertion a réussi
if (!is_wp_error($user_id)) {
  echo 'Utilisateur inséré avec succès! ID de l\'utilisateur : ' . $user_id;

  $newURL = home_url()."/registration/?insert=true";

            $to = $user_data['email'];
            $subject = 'Vérification d\'adresse e-mail';
            $message = 'Merci de vous être inscrit sur notre site. Cliquez sur le lien suivant pour vérifier votre adresse e-mail : ' . home_url("/verify-email/?key=$verification_key");
            $headers = 'From: Votre Nom <votre@email.com>';
    
            // Envoyer l'e-mail
            wp_mail($to, $subject, $message, $headers);
    
        
       ?>

   <meta http-equiv="Refresh" content="0; url='<?php echo $newURL?>'" />

       <?php
      
} else {
  echo 'Erreur lors de l\'insertion de l\'utilisateur : ' . $user_id->get_error_message();
}   

}

if(isset($_GET['insert']) && htmlspecialchars($_GET['insert']) && htmlspecialchars($_GET['insert']) == "true"){

  ?>
  
  
  <div class = "fw-bold fs-2 mt-5">
  <center>
  inscription reussi vous pouver vous connecter
</center>
  </div>

  <?php
}






?>
</div>