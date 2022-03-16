<html>
    <body>
        <center>
        <link rel="stylesheet" href="./public/css/entete.css" />
        <h1 style=" text-shadow: 2px 4px 3px rgba(0,0,0,0.3); color: #1977cc; margin-left: 60px">Modifier un medecin ! </h1><br>
            <form action="./?action=medecins&type=enrmodmedecin" method="POST">
                <input name="id" type="hidden" class="medecin" value='<?= $ret->getid();?>'>
                <h5><p>Nom du médecin:</p><input name="nom" class="medecin" value='<?= $ret->getnom();?>'></h5>
                <h5><p>Prénom du médecin:</p><input name="prenom" class="medecin" value='<?= $ret->getprenom();?>'></h5>
                <h5><p>Adresse:</p><input name="adresse" class="medecin" value='<?= $ret->getadresse();?>'></h5>

                <h5><p>Numéro de téléphone:</p><input name="tel" class="medecin" pattern="[0-9]{10}" value='<?= $ret->gettel();?>' placeholder="0600000000" required></h5>

                <h5><p>Spécialité:</p><input name="specialitecomplementaire" class="medecin" value='<?= $ret->getspecialitecomplementaire();?>'></h5>
                <h5><p>Département:</p><input name="departement" class="medecin" value='<?= $ret->getdepartement();?>'></h5>

                
                 <input style=" background: #1977cc;
                border: 0;
                padding: 10px 35px;
                color: #fff;
                transition: 0.4s;
                border-radius: 50px; 
                " type="submit" value="Modifier"></input> 
            </form>
        </center>
    </body>
</html>