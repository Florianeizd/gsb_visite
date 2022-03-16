<html>

    <body>
        <center>
            <br>
                <form action="./?action=rapports&type=SearchRapport" method="POST">
                    <i class="fas fa-search"></i>
                    <h3><input name='date' type="date" placeholder="Rechercher un rapport"></h3>
                    <button type="submit" class="btn " style=" background: #1977cc;
                            border: 0;
                            padding: 10px 35px;
                            color: #fff;
                            transition: 0.4s;
                            border-radius: 50px; 
                            ">Valider</button>
                </form> 

            <?php 
                for ($i=0; $i<count($lesrapports); $i++){
            ?>
        <html>
        <center>
        <!-- recherche des rapports -->
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $lesrapports[$i]->getdate()?> </h5>
                    
                        <div class="card-text">
                            Motif : <?= $lesrapports[$i]->getmotif()?> <br>
                            Bilan : <?= $lesrapports[$i]->getbilan()?>    <br>

                            <?php echo "<a href='./?action=rapports&type=modifierrapport&id=".$lesrapports[$i]->getId()."'>"?> Modifier le rapport</a>
                        </div>
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
        <br> <h1 style=" text-shadow: 2px 4px 3px rgba(0,0,0,0.3); color: #1977cc; margin-left: 60px">La liste des rapports ! </h1><br> 
            </center>
        <?php 
             for ($i=0; $i<count($ret); $i++){
        ?>
        <center>
                
<!-- liste des rapports -->
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $ret[$i]->getdate()?></h5>
                    
                        <div class="card-text">
                            Motif : <?= $ret[$i]->getmotif()?> <br>
                            Bilan : <?= $ret[$i]->getbilan()?>    <br>
                            
                            <?php echo "<a href='./?action=rapports&type=modifierrapport&id=".$ret[$i]->getId()."'>"?> Modifier le rapport</a>
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

