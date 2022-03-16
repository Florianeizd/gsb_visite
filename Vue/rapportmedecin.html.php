<html>
    <section class="services" id="services">
    <br> <center>
    <h1 style=" text-shadow: 2px 4px 3px rgba(0,0,0,0.3); color: #1977cc; margin-left: 60px">Les rapports du medecin ! </h1><br> <br>
        </center>

    <div class="card" >
        <?php 
            for ($i=0; $i<count($ret); $i++){
        ?>
            <div class="box">
                <div class="card-body">
                    <i class="fas fa-file-alt"></i>
                    <h3>Date : <?php echo $ret[$i]['date']?></h3>
                    <p>Le motif : <?php echo $ret[$i]['motif']?></p>
                    <p>Le bilan : <?php echo $ret[$i]['bilan']?></p>
                </div>
            </div>
        <?php
            $i++;
            }
        ?>
    </div>
    </section>
</html>