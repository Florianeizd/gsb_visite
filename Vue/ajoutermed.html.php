<html>
<br>
<h1 style=" text-shadow: 2px 4px 3px rgba(0,0,0,0.3); color: #1977cc; margin-left: 60px">Création d'un rapport ! </h1><br>


        <form action="./?action=rapports&type=CreeRapportMed" method="post">
        <h3 style="color: #19a4cc; margin-left: 100px">Saisir le medicament et la quantité</h3><br>
            <h4 style="color: #19a4cc; margin-left: 100px">Etape 3/3</h4> <br>
        <input type="hidden" name="nbMed" value=<?php echo($nbMed);?>> 
            <?php for($e=0; $e<$nbMed; $e++){
                ?>
                <input style="margin-left: 100px" list="medicament" class="box" name=<?php echo("medicament".$e); ?> placeholder="Medicament"> <br> <br>
                <datalist id="medicament">
                <?php
                for ($i=0; $i<count($listeMedicaments); $i++){
                ?>
                <option>
                    <input type="radio" name="category" class="box" value="<?php $listeMedicaments[$i]['nomCommercial']?>"/>
                    <label for="<?php $listeMedicaments[$i]['nomCommercial']?>"><?php echo $listeMedicaments[$i]['nomCommercial']?></label>
                </option>
                <?php
                }
                ?>
            </datalist>
            <input style="margin-left: 100px" type="number" class="box" name=<?php echo("quantite".$e); ?> id="quantite" placeholder="Quantité offerte"/>
            <br>
            <br>
            <?php
            }
            ?>
            <button type="submit" class="btn"  style=" background: #1977cc;
                            border: 0;
                            padding: 10px 35px;
                            color: #fff;
                            transition: 0.4s;
                            border-radius: 50px;
                            margin-left: 100px 
                            " >Enregistrer</button>
        </form>
    
</html> 
