<!DOCTYPE html>
<html lang="en">
<head>

  <!--Basic Page Needs-->
  <meta charset="utf-8"/>
  <meta http-equiv="x-ua-compatible" content="text/html"; charset="utf-8"/>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content = "width = device-width, initial-scale = 1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--
  _____
  | _ |_ _
  |(_||_(_) tato_poz@hotmail.com

-->
<meta name="description" content="Studio creativo expertos en comunicacion audiovisual y desarrollo de proyectos digitales "/>
<meta name="keywords" content="Graphic Design-Music Production-Photography-Art studio- Creative people"/>
<meta name="author" content="Leo Pozos"/>

<!--Apartados-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">

<title>NoiseGate Design Studio</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/app.js" type="text/javascript"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135196796-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-135196796-1');
</script>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

  <!--Header-->

  <?php
  include "template_parts/header.php";
  ?>

  <!--End header-->

  <!--Carrousel-->

  <?php
  include "template_parts/carrousel.php";
  ?>

  <!--End Carrousel-->

  <!-- My Social -->

  <?php
  include "template_parts/social.php";
  ?>

  <!-- End My Social -->

  <!-- Portfolio Section -->

  <?php
  include "template_parts/portfolio.php";
  ?>

  <!-- End Portfolio Section -->


  <!-- Contact Section -->

  <?php
  include "template_parts/contact.php";
  ?>

  <!-- End Contact Section) -->

  <!-- Team -->

  <?php
  include "template_parts/team.php";
  ?>

  <!-- End team -->

  <!--Scripts-->

  <script>
  $(document).ready(function(){
    // Initialize Tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {

        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){

          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  })
</script>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>
<script src="js/app.js"></script>

<!--Final de scripts-->

</body>

<!-- Footer -->

<?php
include "template_parts/footer.php";
?>

<!-- End Footer -->

</html>
