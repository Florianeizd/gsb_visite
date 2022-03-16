<html>

    <body>
        <center>
            <br>
                <form action="./?action=medecins&type=SearchMedecin" method="POST">
                    <i class="fas fa-search"></i>
                    <h3><input name='nom' type="search" placeholder="Rechercher un médecin"></h3>
                    <button type="submit" class="btn" style=" background: #1977cc;
                        border: 0;
                        padding: 10px 35px;
                        color: #fff;
                        transition: 0.4s;
                        border-radius: 50px; " >Valider</button>
                </form> 

            <?php 
                for ($i=0; $i<count($lemedecin); $i++){
            ?>
        <html>
        <center>
        <!-- recherche des medecins -->
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $lemedecin[$i]->getnom()?> <?= $lemedecin[$i]->getprenom()?></h5>
                    
                        <div class="card-text">
                            Adresse : <?= $lemedecin[$i]->getadresse()?> <br>
                            Tel : <?= $lemedecin[$i]->gettel()?>    <br>
                            Specialité complémentaire : <?= $lemedecin[$i]->getspecialitecomplementaire()?><br>
                            Département : <?= $lemedecin[$i]->getdepartement()?> <br>
                            <?php echo "<a href='./?action=rapports&type=rapportmedecin&idMedecin=".$lemedecin[$i]->getId()."'>"?> Voir les rapports du médecin</a> <br>
                            <?php echo "<a href='./?action=medecins&type=modifiermedecin&idMedecin=".$lemedecin[$i]->getId()."'>"?> Modifier le medecin</a>
                    </div>
                </div>   
                </div>
                </div>
             <?php
                $i++;
                }
            ?> 
        </center>
        
        <html>
            <center>
        <br> <h1 style=" text-shadow: 2px 4px 3px rgba(0,0,0,0.3); color: #1977cc; margin-left: 60px">La liste des medecins ! </h1><br>
            </center>
        <?php 
             for ($i=0; $i<count($ret); $i++){
        ?>
        <center>
                
<!-- liste des medecins -->
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $ret[$i]->getnom()?> <?= $ret[$i]->getprenom()?></h5>
                    
                        <div class="card-text">
                            Adresse : <?= $ret[$i]->getadresse()?> <br>
                            Tel : <?= $ret[$i]->gettel()?>    <br>
                            Specialité complémentaire : <?= $ret[$i]->getspecialitecomplementaire()?><br>
                            Département : <?= $ret[$i]->getdepartement()?> <br>
                            <?php echo "<a href='./?action=rapports&type=rapportmedecin&idMedecin=".$ret[$i]->getId()."'>"?> Voir les rapports du medecin</a> <br>
                            <?php echo "<a href='./?action=medecins&type=modifiermedecin&idMedecin=".$ret[$i]->getId()."'>"?> Modifier le medecin</a>
                            
                        </div>
                    </div>
                </div>
        
        </div>
        </center>
        </html>
            <?php
                $i++;
                }
            ?>
    </body>
</html>

