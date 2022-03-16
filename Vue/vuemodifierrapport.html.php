<html>
    <body>
        <center>
        <link rel="stylesheet" href="./public/css/entete.css" />
        <h1 style=" text-shadow: 2px 4px 3px rgba(0,0,0,0.3); color: #1977cc; margin-left: 60px">Modifier un rapport ! </h1><br>
            <form action="./?action=rapports&type=enrmodrapport" method="POST">
                <input name="id" type="hidden" class="rapport" value='<?= $ret->getid();?>'>
                <input name="date" type="hidden" class="rapport" value='<?= $ret->getdate();?>'>
                <input name="idVisiteur" type="hidden" class="rapport" value='<?= $ret->getidVisiteur();?>'>
                <input name="idMedecin" type="hidden" class="rapport" value='<?= $ret->getidMedecin();?>'>
                <h5><p>Motif:</p><input name="motif" class="rapport" value='<?= $ret->getmotif();?>'></h5>
                <h5><p>Bilan:</p><input name="bilan" class="rapport" value='<?= $ret->getbilan();?>'></h5>
                

                
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