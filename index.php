<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Projektinis darbas</title>


  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="styles/style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>

  <header>

    <ul id="dropdown1" class="dropdown-content">
      <li><a href="#!">Sign in</a></li>
      <li><a href="#!">Sign up</a></li>
      <li><a href="#!">Terms, privacy & more</a></li>
    </ul>

    <nav>
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo"><i class="large material-icons">toys flight favorite_border</i>AZ</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#">About</a></li>
          <li><a href="#">Help</a></li>
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">More<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
      </div>
    </nav>
  </header>

  <section>

    <div class="mainquestion">
      <h1 class="center-align blue-grey-text text-darken-3">What is your next dream holidays destination?</h1>
    </div>

    <div class="pasirinkburbula">

      <div class="burbulas">
        <a href="countryinfo.php?country=Reykjavík, Iceland"><img src="pictures/iceland-1.JPG" alt=""></a>
      </div>

      <div class="burbulas">
        <a href="countryinfo.php?country=Monterosso al Mare, Italy"><img src="pictures/italy-1.jpg" alt=""></a>
      </div>

      <div class="burbulas">
        <a href="countryinfo.php?country=Port of Spain, Trinidad and Tobago"><img src="pictures/trinidad-1.jpg" alt=""></a>
      </div>

      <div class="burbulas">
        <a href="countryinfo.php?country=Los Angeles, USA"><img src="pictures/usa-1.jpg" alt=""></a>
      </div>

    </div>
  </section>

  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col 8 s6">
          <h5 class="white-text">Contact us today!</h5>
          <div class="form-wrapper" target="_blank" id="contact" action="sent.php" method="post">
            <form>
              <input type="text" name="name" placeholder="Your name" required>
              <input type="email" name="email" placeholder="Your e-mail address" required>
              <textarea placeholder="Your message..." name="message" required></textarea>
              <button name="submit" id="contact-submit">SEND</button>
            </form>
          </div>
        </div>

        <div class="col 8 offset-18 s6">
          <div class="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.983423849919!2d25.290128216029665!3d54.70991477940151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96ae1dedd637%3A0x73978617430c730c!2sUlon%C5%B3+g.+5%2C+Vilnius+08240!5e0!3m2!1sen!2slt!4v1530566996484" width="100%" height="230" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-copyright">
      <div class="container">
        © 2020 Copyright
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="scripts/script.js"></script>
</body>


</html>