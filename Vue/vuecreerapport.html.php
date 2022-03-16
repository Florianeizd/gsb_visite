<html>
    <body>
     
    <div>
       
        <h1 style=" text-shadow: 2px 4px 3px rgba(0,0,0,0.3); color: #1977cc; margin-left: 60px">Création d'un rapport ! </h1><br>

        
    
            <form style="margin-left: 145px;" action="./?action=rapports&type=creerapport" method="POST">
                <input type="date" name="date" placeholder="date" /><br><br>
                <input type="text" name="motif" placeholder="motif"  /><br><br>
                <input type="text" name="bilan" placeholder="bilan"  /><br><br>
                <input list="medecin" name="idMedecin" id="idMedecin" placeholder="Nom">
                <datalist id="medecin">
                    <?php
                    
                    for ($i=0; $i<count($listeMedecins); $i++){
                        ?>
                        <option value="<?php echo $listeMedecins[$i]["id"] ?>">
                            <?php echo $listeMedecins[$i]["nom"]."\n".$listeMedecins[$i]["prenom"]?>
                        </option>
                    <?php
                    }
                    ?>
                </datalist> 
                <br><br>
                <input style=" background: #1977cc;
            border: 0;
            padding: 10px 35px;
            color: #fff;
            transition: 0.4s;
            border-radius: 50px; 
            margin-left: 40px;" type="submit"  value="Creer" />
            </form>
    </div>
    </body>
</html>