<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Projektinis darbas</title>


  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick-theme.css" />
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

  <div class="container">

    <h1 class="center-align indigo-text text-lighten-1"><?php echo $_GET["country"]; ?></h1>


    <div class="row">
      <div class="col s6">
        <h2 class="select-date">Check in <br> <br>Check out</h2>
        <form>
          <div class="input-field">
            <input type="text" class="datepicker">
          </div>
        </form>
        <a href="#!" class="btn waves-effect">Search</a>
      </div>

      <div class="col s6">
        <div class="weather">
          <a class="weatherwidget-io" href="https://forecast7.com/en/64d13n21d82/reykjavik/" data-label_1="REYKJAVÍK" data-icons="Climacons Animated" data-days="7" data-theme="weather_one">REYKJAVÍK</a>
          <script>
            ! function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://weatherwidget.io/js/widget.min.js';
                fjs.parentNode.insertBefore(js, fjs);
              }
            }(document, 'script', 'weatherwidget-io-js');
          </script>
        </div>
      </div>


    </div>


    <div class="row">
      <div class="col s6">
        <div class="card">
          <div class="card-image">
            <img src="pictures/iceland-5.jpg">
            <span class="card-title">About <?php echo $_GET["country"]; ?></span>
          </div>
          <div class="card-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur.</p>
          </div>
          <div class="card-action">
            <a href="https://www.iceland.is/">More about country</a>
          </div>
        </div>
      </div>


      <div class="col s6">
        <div class="card indigo lighten-2">
          <div class="card-content white-text">
            <span class="card-title">Things to Do</span>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea voluptate obcaecati repudiandae officia dignissimos, quasi explicabo aperiam accusantium quia! Veritatis itaque, ab nobis natus quia dolores aliquid temporibus iure ratione. Lorem ipsum dolor sit amet consectetur.
            </p>
          </div>
          <div class="card-action">
            <a href="https://www.tripadvisor.com/Attractions-g189970-Activities-Reykjavik_Capital_Region.html">Activities</a>
          </div>
          <div class="card-content white-text">
            <span class="card-title">Where to Eat</span>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea voluptate obcaecati repudiandae officia dignissimos, quasi explicabo aperiam accusantium quia! Veritatis itaque, ab nobis natus quia dolores aliquid temporibus iure ratione. Lorem ipsum dolor sit amet consectetur.
            </p>
          </div>
          <div class="card-action">
            <a href="https://www.tripadvisor.co.uk/Restaurants-g189970-Reykjavik_Capital_Region.html">Restaurants & Places to Eat</a>
          </div>
        </div>
      </div>
    </div>


    <div class="multiple-items">
      <div><img src="pictures/iceland-1.jpg"></div>
      <div><img src="pictures/iceland-2.jpg"></div>
      <div><img src="pictures/iceland-3.jpg"></div>
      <div><img src="pictures/iceland-4.jpg"></div>
      <div><img src="pictures/iceland-5.jpg"></div>
    </div>

  </div>

  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col 8 s6">
          <h5 class="white-text">Contact us</h5>
          <div class="form-wrapper">
            <form>
              <input type="text" name="" placeholder="Full name">
              <input type="text" name="" placeholder="E-mail">
              <textarea placeholder="Message"></textarea>
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
              </button>
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
      <!-- <ul class="social-links">
					<li><a href="#"><img src="pictures/facebook-circle.png"></a></li>					
					<li><a href="#"><img src="pictures/linkedin-circle.png"></a></li>
					<li><a href="#"><img src="pictures/instagram-circle.png"></a></li>
        </ul>  -->

      <div class="container">
        © 2020 Copyright

        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
      </div>



    </div>


  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    const Calendar = document.querySelector('.datepicker');
    M.Datepicker.init(Calendar, {
      format: 'yyyy-mmmm-dd',
      showClearBtn: true,
    });
  </script>


  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
  <script type="text/javascript" src="slick-1.8.1/slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 2000,
      });
    });
  </script>

  <script src="scripts/script.js"></script>
</body>

</html>