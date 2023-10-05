<?php

var_dump($_POST);

?>

<P>Merci <?= $_POST['user_firstname'].' '.$_POST['user_lastname']?> de nous avoir contacté à propos de “<?=$_POST['message_subject']?>”.</p>
<br>
<p>Un de nos conseillers vous contactera soit à l’adresse <?=$_POST['user_email']?> ou par téléphone au <?=$_POST['user_phone_number']?> dans les plus brefs délais pour traiter votre demande : </p>
<br>
<p><?=$_POST['user_message']?>
