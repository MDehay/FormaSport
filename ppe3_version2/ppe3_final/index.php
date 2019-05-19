<?php
include_once  'view/menu/header.php';
?>
      <div id="login">
          <h3 class="text-center text-white pt-5">Formulaire d'identification</h3>
          <div class="container">
              <div id="login-row" class="row justify-content-center align-items-center">
                  <div id="login-column" class="col-md-6">
                      <div id="login-box" class="col-md-12">
                          <form id="login-form" class="form" action="controller/redirection/login.php" method="post">
                              <h3 class="text-center text-info">FormaSport</h3>
                              <div class="form-group">
                                  <label for="Email" class="text-info"> Email:</label><br>
                                  <input type="text" name="Email" id="Email" class="form-control">
                              </div>
                              <div class="form-group">
                                  <label for="MDP" class="text-info">Mot de passe: </label><br>
                                  <input type="password" name="Mdp" id="Mdp" class="form-control">
                              </div>
                              <div class="form-group">
                                  <label for="remember-me" class="text-info"><span>Se souvenir</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                  <input type="submit"  name="submit" class="btn btn-info btn-md" value="envoyer">
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
<?php
if (isset($_GET['login']))
{
    if ($_GET['login']== 'deconnexion')
    {
        echo'<script>alert("vous aller être déconnecter")</script>';
        session_start();
        session_destroy();
        header("Refresh:1,url=index.php");


    }
}

if (isset($_GET['message']))
{
    if ($_GET['message']== 'login_password_error')
    {
        echo'<script>alert("votre login et mot de passe sont incorrect")</script>';
        session_start();
        session_destroy();
        header("Refresh:1,url=index.php");

    }
}

include_once 'view/menu/footer.php';
?>

