<?php
$file = "text.txt";
$myfile = fopen($file, "r") or die("Unable to open file!");
$txt = fread($myfile,filesize($file));
fclose($myfile);
$newfile = fopen($file, "w") or die("Unable to open file!");
fwrite($newfile, $txt + 1);
fclose($newfile);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Download ChatMeow</title>
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="images/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="images/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="images/favicon-16x16.png"
    />
    <link rel="manifest" href="images/site.webmanifest" />
    <link rel="stylesheet" href="style.css" />
    <link rel="canonical" href="https://chatmeow.rf.gd/" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <script
      src="https://kit.fontawesome.com/171e689b28.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <nav>
      <div class="logo">ChatMeow</div>
      <input type="checkbox" id="click" />
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a class="active" href="#">Download</a></li>
        <li><a href="support/index.php">Support</a></li>
        <li>
          <a href="https://chatmeow.000webhostapp.com/login.php">Login</a>
        </li>
        <li><a href="https://chatmeow.000webhostapp.com/">Signup</a></li>
      </ul>
    </nav>
    <div class="container">
      <h1>Download ChatMeow</h1>
      <div class="row">
        <div class="column">
          <p>ChatMeow is available on Android for free!</p>
          <label class="and-img">
            <img src="images/android.svg" alt="Android" /> </label
          ><br />
          <a class="dl-btn" id="downloadBtn" href="#">Download</a>
        </div>
        <div class="column">
          <p>ChatMeow is available on Windows for free!</p>
          <br /><br />
          <label class="wind-img">
            <i class="fa fa-windows"></i> </label
          ><br /><br /><br />
          <a class="dl-btn" id="downloadBtn2" href="#">Download</a>
        </div>
        <div class="column">
          <p>ChatMeow is available on Web for free!</p>
          <br />
          <label class="glb-img">
            <i class="fa-solid fa-globe"></i> </label
          ><br /><br /><br />
          <a class="dl-btn" href="https://chatmeow.000webhostapp.com/"
            >ChatMeow Web</a
          >
          <br /><br /><br /><br />
        </div>
      </div>
    </div>
    <script>
      document
        .getElementById("downloadBtn")
        .addEventListener("click", function () {
          window.location.href = "thank-you.html";
        });
      document
        .getElementById("downloadBtn2")
        .addEventListener("click", function () {
          window.location.href = "thank-you2.html";
        });
    </script>
  </body>
</html>
