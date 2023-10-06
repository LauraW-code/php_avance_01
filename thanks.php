<?php

$errors = [];


if ($_SERVER['REQUEST_METHOD'] === 'POST'){

  if (!isset($_POST['user_firstname']) || empty($_POST['user_firstname'])) {
    $errors[] = "Le prénom est obligatoire";
  }
  if (!isset($_POST['user_lastname']) || empty($_POST['user_lastname'])) {
    $errors[] = "Le nom est obligatoire";
  } 
  if (!isset($_POST['user_phone_number']) || empty($_POST['user_phone_number'])) {
    $errors[] = "Le numéro de téléphone est obligatoire";
  } 
  if (!isset($_POST['message_subject']) || empty($_POST['message_subject'])) {
    $errors[] = "L'objet du message est obligatoire"; 
  }  
  if (!isset($_POST['user_email']) || empty($_POST['user_email'])) {
    $errors[] = "L'e-mail est obligatoire"; 
  }  
  if (!isset($_POST['user_message']) || empty($_POST['user_message'])) {
    $errors[] = "Le message est obligatoire"; 
  }  
}

?>

<?php if ( count($errors) > 0 ) : ?>
 <ul>
    <?php foreach($errors as $error): ?>
    <li><?= $error ?></li>
    <?php endforeach; ?>
 </ul>

 <?php else : ?>
<P>Merci <?= $_POST['user_firstname'].' '.$_POST['user_lastname']?> de nous avoir contacté à propos de “<?=$_POST['message_subject']?>”.</p>
<br>
<p>Un de nos conseillers vous contactera soit à l’adresse <?=$_POST['user_email']?> ou par téléphone au <?=$_POST['user_phone_number']?> dans les plus brefs délais pour traiter votre demande : </p>
<br>
<p><?=$_POST['user_message']?></p>

<?php endif; ?>