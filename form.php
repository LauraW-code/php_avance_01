

<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_firstname" required>
    </div>
    <div>
      <label  for="nom-de-famille">Nom de famille:</label>
      <input  type="text"  id="nom-de-famille"  name="user_lastname" required>
    </div>
    <div>
      <label  for="phone_number">Téléphone :</label>
      <input  type="text"  id="phone"  name="user_phone_number" required>
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" required>
    </div>
    <div>
      <label  for="courriel">Objet du message :</label>
        <select id="message_subject" name="message_subject" required>
          <option value="">Veuillez sélectionner...</option>
          <option value="Effectuer un retour">Effectuer un retour</option>
          <option value="Suivi Livraison">Suivi Livraison</option>
          <option value="Erreur sur la commande">Erreur sur la commande</option>
          <option value="Autre">Autre</option>
        </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message" required></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>

  
