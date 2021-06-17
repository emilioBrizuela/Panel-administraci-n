<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/User.js"></script>
    <script src="js/jquery-3.6.0.js"></script>
</head>

<body>
<div class="login container-login">
    <div class="login-intro">
      <div class="login-intro__logo">
        <img src="img/logo-match.svg" alt="">
      </div>

      <div class="login-intro__text">
        <h1>A few clicks away from managing your club.</h1>
        <p>Start managing your own club in minutes. <br>Save money and time.</p>
      </div>

      <div class="login-intro__img">
        <img src="" alt="">
      </div>
    </div>

    <div class="login-form">
      <h2>Log in</h2>

      <form name="formLogin" action="#" method="post" id="formLogin">

        <div class="field-container">
          <input class="field-input" type="email" name="user" id="user" placeholder=" ">
          <label class="field-placeholder" for="user">User name</label>
        </div>


        <div class="field-container">
          <input class="field-input" type="password" name="pass" id="pass" placeholder=" ">
          <label class="field-placeholder" for="pass">Password</label>
        </div>
        <span id="msj" name="msj" class="message"></span>
      </form>

      <button type="submit" class="button" onclick="login();">Login</button>
    </div>
  </div>
<!-- 
    <div class="container-login">
        <div class="content-login">
            <h1>Inicio de sesión</h1>
            <form name="formLogin" action="#" method="post" id="formLogin">
                <input type="email" name="user" id="user" placeholder="User">
                <input type="password" name="pass" id="pass" placeholder="Password">
                <span id="msj" name="msj" class="message"></span>
            </form>
            <button type="submit" class="btn" onclick="login();">Login</button>
        </div>
    </div> -->
</body>

</html>