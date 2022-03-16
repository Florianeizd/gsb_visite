<html>
    <boby>
        <br>
        <h1 style=" text-shadow: 2px 4px 3px rgba(0,0,0,0.3); color: #1977cc; margin-left: 60px">Vous êtes connecté ! </h1>
    
        <br>
        
            


            <h4 style="color: #19a4cc; margin-left: 120px">Mon login : <?= visiteurDAO::getloginloggedOn($login); ?></h4>




        <a href="./?action=deconnexion" style=" font-family: Raleway, sans-serif;
            text-transform: uppercase;
            font-weight: 500;
            font-size: 14px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 12px 35px;
            margin-top: 30px;
            margin-left: 110px;
            border-radius: 50px;
            transition: 0.5s;
            color: #fff;
            background: #1977cc;">se deconnecter</a><br>
        <br/>


    </boby>


</html>
