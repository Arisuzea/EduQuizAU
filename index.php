<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="login.css" />
    <link
      rel="shortcut icon"
      href="/IMAGE/OfficialLogo.svg"
      type="image/x-icon"
    />
    <link 
      rel="shortcut icon"
      href="/IMAGE/LOGO111111-removebg-preview.png"
      type="image/x-icon"
    />
    <link
      href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <style></style>
    <title>Login</title>
  </head>
  <body>
    <!-- CONTAINER -->
    <div class="container">
      <!-- BRAIN IMAGE -->
      <div class="ImageBrain">
        <img
          src="https://scontent.xx.fbcdn.net/v/t1.15752-9/420604729_213168628542802_4470638483137363041_n.png?stp=dst-png_s640x640&_nc_cat=110&ccb=1-7&_nc_sid=510075&_nc_eui2=AeGaWEG4FxXJLAfb4ta2sJLLR37mcey1LwhHfuZx7LUvCPiMEGBZ5IlqYmDTPMwFsBPPvlhWo1StYZ-jr6eB4il6&_nc_ohc=J4-J29hQn9wAX8kbXoI&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdQAVrpuJL4ZOQOlBXR61j-5gCk2tE-5TiVtz0yztQ4qUw&oe=65E462C6"
          alt="Brain"
        />
      </div>
      <!-- LOGO -->
      <div class="logo">
        <img
          src="https://scontent.xx.fbcdn.net/v/t1.15752-9/416254564_229762756884500_5050083700608708339_n.png?stp=dst-png_s640x640&_nc_cat=111&ccb=1-7&_nc_sid=510075&_nc_eui2=AeEMt8jjZTEtn_GreL2TVYG8S7TkXl5c5JZLtOReXlzklhk0dDkNwv--04WqKhenVzWebcEiajVdeM3ne_fAydVy&_nc_ohc=XXMTA7zmQEoAX-vZY6o&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTSG1S90D9ecZ8n3yII_EOH1Mzi8i8yxdDdvTRymXRQVw&oe=65E4745E"
          alt="Logo"
        />
        <h2>EduQuiz</h2>
      </div>
      <div class="heading" style="position: absolute; left: 10%">
        <h1>Login</h1>
        <h2>Don't have an account yet? <a href="SignUp.php">Sign Up</a></h2>
      </div>
    </div>
    <!-- LOGIN -->
    <div class="ContainerForm">
      <form action="login.php" method="POST" id="form">
        <!-- EMAIL ADDRESS  -->
        <div class="email_address">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" placeholder="" required />
        </div>
        <!-- PASSWORD -->
        <div class="password">
          <label for="password"
            >Password <a href="#">Forgot Password?</a></label
          >
          <input type="password" id="password" name="password" placeholder=""required />
          <!-- SHOW PASSWORD -->
          <span class="showPass" onclick="myFunction()" title="Show Password">
            <i id="hide1" class="fa fa-eye"></i>
            <i id="hide2" class="fa fa-eye-slash"></i>
          </span>
        </div>
        <!-- REMEMBER ME  -->
        <div class="remember">
          <input type="checkbox" id="rememberme" name="rememberme" />
          <label for="">Remember me</label>
        </div>
      </form>
      <div class="btn-login">
          <button type="button" id="submitOutsideForm">Login</button>
      </div>
    </div>

    <!-- SHOW PASSWORD JS SCRIPT-->
    <script>
      function myFunction() {
        var x = document.getElementById("password");
        var y = document.getElementById("hide1");
        var z = document.getElementById("hide2");

        if (x.type === "password") {
          x.type = "text";
          y.style.display = "block";
          z.style.display = "none";
        } else {
          x.type = "password";
          y.style.display = "none";
          z.style.display = "block";
        }
      }

      document.getElementById("submitOutsideForm").addEventListener("click", function() {
        document.getElementById("form").submit();
    });
    </script>
  </body>
</html>
