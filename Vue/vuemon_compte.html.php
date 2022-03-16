<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="./public/css/mon_compte.css" />
    </head>


    <body>
   

    <form action="./?action=connexion" method="POST" id="login-form" class="login-form" autocomplete="off" role="main">
        <h1 class="a11y-hidden">Connexion</h1>
            <div>
                <label class="label-login">
                    <input type="text" name="login" placeholder="Login" tabindex="1" required/>
                    <span class="required">Login</span>
                </label>
            </div>
        
        
        <div>
            <label class="label-password">
            <input type="password" class="text" name="mdp" placeholder="Mot de passe" tabindex="2" required />
            <span class="required">Mot de passe</span>
            </label>
        </div>
        <input type="submit" value="Connexion" />
    
        <figure aria-hidden="true">
            <div class="person-body"></div>
            <div class="neck skin"></div>
            <div class="head skin">
            <div class="eyes"></div>
            <div class="mouth"></div>
            </div>
            <div class="hair"></div>
            <div class="ears"></div>
            <div class="shirt-1"></div>
            <div class="shirt-2"></div>
        </figure>
    </form>

    
    </body>
</html>