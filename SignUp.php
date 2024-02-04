<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="Signup.css" />
    <link
      rel="shortcut icon"
      href="/IMAGE/OfficialLogo.svg"
      type="image/x-icon"
    />
    <link
      href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <title>EduQuiz Animation - Sign Up</title>
  </head>
  <body>

    <?php 
      include 'register.php'; 
    ?>

    <!-- BRAIN IMAGE -->
    <div class="ImageBrain">
      <img
        src="https://scontent.xx.fbcdn.net/v/t1.15752-9/420604729_213168628542802_4470638483137363041_n.png?stp=dst-png_s640x640&_nc_cat=110&ccb=1-7&_nc_sid=510075&_nc_eui2=AeGaWEG4FxXJLAfb4ta2sJLLR37mcey1LwhHfuZx7LUvCPiMEGBZ5IlqYmDTPMwFsBPPvlhWo1StYZ-jr6eB4il6&_nc_ohc=J4-J29hQn9wAX8kbXoI&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdQAVrpuJL4ZOQOlBXR61j-5gCk2tE-5TiVtz0yztQ4qUw&oe=65E462C6"
        alt="Brain"
      />
    </div>
    <!-- HEADER -->
    <div class="header">
      <!-- LOGO -->
      <div class="logo">
        <img
          src="https://scontent.xx.fbcdn.net/v/t1.15752-9/416254564_229762756884500_5050083700608708339_n.png?stp=dst-png_s640x640&_nc_cat=111&ccb=1-7&_nc_sid=510075&_nc_eui2=AeEMt8jjZTEtn_GreL2TVYG8S7TkXl5c5JZLtOReXlzklhk0dDkNwv--04WqKhenVzWebcEiajVdeM3ne_fAydVy&_nc_ohc=XXMTA7zmQEoAX-vZY6o&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTSG1S90D9ecZ8n3yII_EOH1Mzi8i8yxdDdvTRymXRQVw&oe=65E4745E"
          alt="Logo"
        />
        <h2>EduQuiz</h2>
      </div>
      <span class="heading">
        <h1>Create an Account</h1>
      </span>
    </div>
    <div class="containerForm">
      <form action="#" method="post" id="form">
        <div class="fullname">
          <span class="firstname">
            <!-- FIRST NAME -->
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" required />
          </span>
          <!-- LAST NAME -->
          <span class="lastname">
            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" name="lastname" required />
          </span>
        </div>
        <!-- EMAIL -->
        <div class="email_address">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" required />
        </div>

        <!-- PASSWORD -->
        <div class="Password">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />
        </div>

        <!-- REPEAT-PASSWORD -->
        <div class="RepeatPassword">
          <label for="RepeatPassword">Repeat Password</label>
          <input
            type="password"
            id="repeatpassword"
            name="repeatpassword"
            required
          />
        </div>
        <div class="btn-signup">
          <button type="submit" name="signup" id="submit">Sign Up</button>
        </div>
          </span>


      </form>
    </div>
    <!-- SHOW PASSWORD JS SCRIPT-->
    <!-- <script>
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
    </script> -->
<!-- SHOW PASSWORD -->
          <!-- <span class="showPass" onclick="myFunction()" title="Show Password">
            <i id="hide1" class="fa fa-eye"></i>
            <i id="hide2" class="fa fa-eye-slash"></i>
          </span> -->
  </body>
</html>
