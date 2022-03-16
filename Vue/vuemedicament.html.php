<html>

    <body>
        
        <html>
            <center>
        <br> <h1 style=" text-shadow: 2px 4px 3px rgba(0,0,0,0.3); color: #1977cc; margin-left: 60px">La liste des médicaments ! </h1><br>
            </center>
        <?php 
             for ($i=0; $i<count($ret); $i++){
        ?>
        <center>
                
<!-- liste des medecins -->
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $ret[$i]->getnomCommercial()?></h5>
                    
                        <div class="card-text">
                            Famille : <?= $ret[$i]->getidFamille()?> <br>
                            Composition : <?= $ret[$i]->getcomposition()?>    <br>
                            Effets : <?= $ret[$i]->geteffets()?><br>
                            Contre Indications : <?= $ret[$i]->getcontreIndications()?> <br>
                            
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

