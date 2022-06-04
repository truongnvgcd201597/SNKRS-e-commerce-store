<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="/source/styles.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/fontawesome/css/all.css" />
    <style>
      html {
        font-family: Arial, Helvetica, sans-serif;
      }
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
      #header {
        z-index: 1;
        height: 60px;
        position: relative;
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        padding-bottom: 60px;
      }
      #nav {
        display: inline-block;
        position: absolute;
        right: 20px;
        top: 6px;
      }
      #nav li {
        display: inline-block;
      }
      #nav > li > a {
        color: black;
        text-transform: uppercase;
        font-weight: bolder;
      }

      #nav li a {
        line-height: 50.5px;
        text-decoration: none;
        font-size: 18px;
        display: block;
        padding: 0 30px;
      }
      #nav li a:hover {
        color: #ccc;
      }

      /* IMG */
      #img-section {
        background-image: url("/project/images/bg-map.jpg");
        display: block;
        position: relative;
        padding-top: 52.1%;
        background-position: top center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      .icon-header {
        width: 185px;
        position: absolute;
        top: -63px;
        z-index: 3;
      }
      #text-content {
        position: absolute;
        top: 36%;
        width: 100%;
        color: black;
        font-family: "Orelega One", cursive;
        font-size: 20px;
        text-align: center;
        line-height: 60px;
      }
      .text--desription {
        font-size: 30px;
        font-style: italic;
        color: bisque;
      }
      .text--heading {
        font-size: 5.5rem;
        color: #56a100;
        text-shadow: 0 0 15px #ccc;
        font-family: math;
      }
      .text--heading1 {
        font-family: math;
        font-size: 88px;
        color: green;
        font-weight: bolder;
        padding-top: 33px;
      }
      .text--heading2 {
        position: absolute;
        font-size: 25px;
        left: 34%;
        bottom: -155%;
        color: white;
      }

      /* ABOUT ME */
      #row {
        display: flex;
        align-items: center;
        height: 690px;
        background-color: rgba(255, 127, 80, 0.959);
      }
      .cols-1 {
        flex-basis: 40%;
        position: relative;
        margin-left: 50px;
      }
      .cols-2 {
        position: relative;
        flex-basis: 60%;
        align-items: center;
        top: -12px;
        left: -69px;
      }
      .pic-thumb {
        width: 80%;
        position: absolute;
        z-index: 1;
        bottom: -304px;
        left: -20px;
      }
      .toneround {
        position: absolute;
        top: -320px;
        z-index: 0;
      }
      .title--about-me {
        display: inline-block;
        font-family: "Dela Gothic One", cursive;
        color: aliceblue;
        font-size: 50px;
        margin-bottom: 40px;
      }
      .introme {
        width: 70%;
        font-size: 22px;
        font-family: "Playfair Display", serif;
        color: darkslategrey;
      }
      .text-tag {
        color: antiquewhite;
        font-size: 25px;
      }
      a.school-name {
        text-decoration: none;
      }
      /* PORFOLIO */
      #portfolio {
        height: 1780px;
        background-image: url("/project/images/mecvbg.png");
        background-position: top center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      /* CONTACT */
      #contact {
        height: 550px;
        background-color: rgba(255, 127, 80, 0.959);
        position: relative;
      }
      h1.contact-p {
        padding: 4% 4%;
        font-size: 66px;
        width: 7px;
        color: white;
      }
      h1.contact-p:hover {
        color: cornsilk;
      }
      .face-1 {
        font-size: 100px;
        color: floralwhite;
        position: absolute;
        top: 20%;
        right: 67%;
      }
      .github-1 {
        font-size: 100px;
        color: floralwhite;
        position: absolute;
        top: 60%;
        right: 67%;
      }
      .ig-1 {
        font-size: 110px;
        color: aliceblue;
        position: absolute;
        top: 20%;
        right: 36%;
      }
      .mail-1 {
        font-size: 100px;
        color: aliceblue;
        position: absolute;
        top: 60%;
        right: 36%;
      }
      .fb-acc {
        top: 29%;
        left: 35%;
        font-size: 33px;
      }
      .ig-acc {
        top: 30%;
        left: 66%;
        font-size: 33px;
      }
      .mail-acc {
        top: 70%;
        right: 2%;
        font-size: 33px;
      }
      .git-acc {
        font-size: 33px;
        right: 45%;
        top: 70%;
      }
      .abs {
        position: absolute;
      }
      .index-first {
        z-index: 1;
      }
      .title--about-me:hover {
        color: cornsilk;
      }
      .text-tag:hover {
        color: whitesmoke;
      }
      /* ------------------------- */
      .mice-1 {
        font-size: 36px;
        color: darkgrey;
        position: absolute;
        top: 90%;
        left: 50%;
      }
      .mice-1:hover {
        color: whitesmoke;
      }
      .mice-2 {
        font-size: 36px;
        color: darkgrey;
        position: absolute;
        top: 177%;
        left: 50%;
      }
      .mice-2 :hover {
        color: whitesmoke;
      }
      .mice-3 {
        font-size: 36px;
        color: darkgrey;
        position: relative;
        top: 97%;
        left: 50%;
      }
      .mice-3:hover {
        color: whitesmoke;
      }
      #contact h2 {
        color: white;
      }
      .pad-1 {
        position: absolute;
        font-size: 500px;
        opacity: 0.2;
        top: 6%;
        right: 33%;
        z-index: 0;
        color: bisque;
      }
    </style>
  </head>

  <body>
    <div id="main">
      <div id="header">
        <div class="img-icon">
          <img src="/project/images/logoT.png" class="icon-header" alt="#" />
        </div>
        <ul id="nav">
          <li><a href="#row">About</a></li>
          <li><a href="#portfolio">Story</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
      <div id="img-section">
        <div id="text-content">
          <h2 class="text--heading">Hello everyone, my name is</h2>
          <h1 class="text--heading1">"Truong"</h1>
          <h4 class="text--heading2">
            Let's explore the interesting things about me
          </h4>
        </div>
        <a href="#row"><i class="fas fa-mouse mice-1"> </i></a>
      </div>
      <div id="row">
        <div class="cols-1">
          <img src="../project/images/meava.png" class="pic-thumb" alt="" />
          <img src="../project/images/toneava.jpg" class="toneround" alt="" />
        </div>
        <div class="cols-2">
          <h1 class="title--about-me">About me!!</h1>
          <h4 class="introme">
            ""My name is <strong class="text-tag">Truong</strong>, second-year student at
            <a href="https://greenwich.edu.vn/" class="school-name"
              ><strong class="text-tag"
                >University of Greenwich Vietnam (Da Nang campus)</strong
              ></a
            >, majoring in
            <strong class="text-tag">Information Technology</strong>. I love
            technology and graphics, I really want to program everything to the
            best."
          </h4>
        </div>
        <a href="#portfolio"><i class="fas fa-mouse mice-2"></i></a>
      </div>
      <div id="portfolio">
        <a href="#contact"><i class="fas fa-mouse mice-3"></i></a>
      </div>
      <div id="contact">
        <h1 class="contact-p">We can make friends through:</h1>
        <h2 class="fb-acc abs">NV Truong</h2>
        <h2 class="ig-acc abs">nv_truonqqq</h2>
        <h2 class="git-acc abs">truongnvgcd201597</h2>
        <h2 class="mail-acc abs">truongnvgcd201597@fpt.edu.vn</h2>
        <a href="https://www.facebook.com/profile.php?id=100043132881656"
          ><i class="fab fa-facebook face-1"></i
        ></a>
        <a href="https://www.instagram.com/nv_truonqqq/?hl=en"
          ><i class="fab fa-instagram ig-1"></i
        ></a>
        <i class="fab fa-github github-1"
          ><a href="https://github.com/nvtruonggg/DSC_practice"></a
        ></i>
        <i class="fas fa-envelope mail-1"></i>
        <i class="fas fa-gamepad pad-1"></i>
      </div>
    </div>
  </body>
</html>
