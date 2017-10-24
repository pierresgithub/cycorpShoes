<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<title>CyCorp</title>
<link rel="icon" type="image/png" href="assets/images/favicon.png" />
<link rel="stylesheet" type="text/css" href="PUBLIC/assets/css/styles.css" />
<link rel="stylesheet" type="text/css" href="PUBLIC/libary/reset.css" />
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>

<body>

  <!-- Main Start -->
  <div class="main">

    <!-- Main Header Start -->
    <?php include "APP/views/parts/header_en.php" ?>
    <!-- Main Header End -->

    <!-- Main Content Start -->

    <section class="slide"><img src="PUBLIC/assets/images/slide.jpg" width="940" height="306" alt="nikeAirMax97Gold"/>
    </section>

    <section class="rose"><img src="PUBLIC/assets/images/SUBSCRIBElittle.png" width="250" height="57" alt="Newsletter"/>
    </section>

    <section class="content">
      <ul class="princess">
        <li class="piece1"><img src="PUBLIC/assets/images/adidas_yeezy_boost_350little.jpg" width="240" height="171" alt="adidas_yeezy_boost_350"/>
        </li>
        <li class="piece1"><img src="PUBLIC/assets/images/adidas_gazellelittle.jpg" width="240" height="171" alt="adidas_gazelle"/>
        </li>
        <li class="piece1"><img src="PUBLIC/assets/images/nike_air_max_97_goldlittle.jpg" width="240" height="171" alt="nike_air_max_97_gold"/>
        </li>
        <li class="piece2"><img src="PUBLIC/assets/images/nike_air_pegasus_redlittle.jpg" width="240" height="171" alt="Snike_air_pegasus_red"/>
        </li>
        <li class="piece2"><img src="PUBLIC/assets/images/Asics_azteclittle.jpg" width="240" height="171" alt="Asics_aztec"/>
        </li>
        <li class="piece2"><img src="PUBLIC/assets/images/Asics_north_facelittle.jpg" width="240" height="171" alt="Asics_North_Face"/>
        </li>
      </ul>
    </section>


    <!-- Main Content End -->

    <!-- Content Footer Start -->
    <?php include "APP/views/parts/footer.php" ?>
    <!-- Content Footer End -->

  </div>
	<!-- Main End -->

  <script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>
  <script src='PUBLIC/assets/js/jquery.js'></script>
  <script>
      $(document).ready(function(){
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
  </script>

</body>

</html>
