<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>cntnt/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url(); ?>cntnt/favicon.ico" type="image/x-icon">
    <meta name="author" content="Anupam Mondal">
    <meta name="web_author" content="anupammondal.in">
    <meta name="reply-to" content="a9051985@gmail.com">
    <meta name="contact" content="a09051985@gmail.com">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Oxyzonetherapy</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>cntnt/flags.css" rel="stylesheet">
    <!-- Vustom Style -->
    <link href="<?php echo base_url(); ?>cntnt/ozonebyanupam.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-fixed-top parallax-one">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <i class="fa fa-bars txt-fff"></i>
          </button>
          <a class="navbar-brand text-uppercase" href="<?php echo base_url(); ?>homepage">Oxyzonetherapy</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>about_ozone">About Ozone</a></li>
                <li><a href="<?php echo base_url(); ?>testimonials">Testimonials</a></li>
                <li><a href="<?php echo base_url(); ?>frequently_asked_questions">Frequently Asked Questions</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Applications <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>food_and_ozone">Food & Ozone</a></li>
                <li><a href="<?php echo base_url(); ?>medical_ozone_applications">Medical Ozone</a></li>
                <li><a href="<?php echo base_url(); ?>other_applications">Other Applications</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>zeon_medical" class="text-uppercase">Zeon Medical</a></li>
                <li><a href="<?php echo base_url(); ?>nisa_p" class="text-uppercase">Nisa-P</a></li>
                <li><a href="<?php echo base_url(); ?>0019_gwp" class="text-uppercase">0019 GWP</a></li>
                <li><a href="<?php echo base_url(); ?>0023_gwp" class="text-uppercase">0023 GWP</a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url(); ?>contact_us">Contact</a></li>
          </ul>
          <a href="https://ozonepedia.com" title="Ozonepedia"><img alt="Ozonepedia" title="Ozonepedia" class="nav navbar-nav navbar-right brand-right" src="https://ozonepedia.com/wp-content/themes/ozonepedia/images/logo.png"></a>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <header class="parallax-two">
      <h1 class="text-center text-uppercase txt-fff">Oxyzone Therapy</h1>
      <h2 class="text-center text-uppercase txt-ozone">MEDICAL OZONE - MOTHER NATURE'S GREATEST GIFT </h2>
    </header>
    <section class="">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <hr class="hr-ozone" />
            <p class="text-justify p-testimoni">Enter the world of your very own encyclopedia on Ozone. We know all the basics like
            that this gas protects us from the harmful cosmic rays by its unique layer formation
            above the stratosphere, we are scared when we find that there are holes formed in
            the layer. FDA (USA) recognizes Ozone as Generally Recognized As Safe (GRAS).
            In 1896, Nikola Tesla patented the first ozone generator in the United States.
            Ozone combined with negative ions (Bio-Oxygen) at the right concentration in air has
            been proven to be the strongest disinfectant in Mother Earth. Physicians advise that a measured dosage of ozone is necessary for inhaling
            continuously, as we drink polluted air as much as 15000 litres per day while we drink only 2 litres of water in the same time.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="parallax-about" id="cform">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-2 col-xs-12"></div>
          <div class="col-md-6 col-sm-8 col-xs-12">
            <h2 class="text-center text-uppercase h3-bold txt-fff">SEND A MESSAGE TO US</h2>
            <hr />
            <?php
              echo "<h4 class='text-center txt-fff form-msg'>";
              echo $this->session->flashdata('success_msg');
              echo "</h4>";
            ?>
            <form method="post" action="<?php echo base_url(); ?>welcome/userdtlsmail">
              <div class=" col-sm-6 col-xs-12">
                <div class="form-group">
                  <!-- <label for="FirstName">First Name</label> -->
                  <input type="text" class="form-control" id="FirstName" placeholder="First Name" name="FirstName" required>
                </div>
              </div>
              <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                  <!-- <label for="LastName">Last Name</label> -->
                  <input type="text" class="form-control" id="LastName" placeholder="Last Name" name="LastName" required>
                </div>
              </div>
              <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                  <!-- <label for="ContactNumber">Contact Number</label> -->
                  <input type="tel" class="form-control" id="ContactNumber" placeholder="Contact Number" name="ContactNumber" required>
                </div>
              </div>
              <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                  <!-- <label for="InputEmail">Email address</label> -->
                  <input type="email" class="form-control" id="InputEmail" placeholder="Email" name="InputEmail" required>
                </div>
              </div>
              <div class="col-xs-12">
                <div class="form-group">
                  <!-- <label for="YourMessage">Your Message</label> -->
                  <textarea class="form-control" rows="5" id="urmsg" placeholder="Your Message" name="urmsg"></textarea>
                </div>
                <button type="submit" class="btn center-block">Submit</button>
              </div>
            </form>
          </div>
          <div class="col-md-3 col-sm-2 col-xs-12"></div>
        </div>
      </div>
    </section>
    <section class="section-padd" id="before-foot">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-xs-12">
            <h3 class="txt-black hidden-sm hidden-xs text-left text-uppercase"><img src="<?php echo base_url(); ?>cntnt/blank.gif" class="flag flag-dk" alt="Denmark" /> DENMARK OFFICE</h3>
            <address class="txt-black hidden-sm hidden-xs text-left">
              <i class="fa fa-map-marker txt-ozone"></i>
              Birkhøjvej 7, 2800<br />
              Kongens, Lyngby<br />
              Copenhagen<br />
              <a class="txt-black" href="mailto:europe@ozonepedia.com" title="Oxyzonetherapy email address" class="txt-black">
              <i class="fa fa-envelope-o txt-blue"></i> europe@ozonepedia.com</a>
            </address>
            <h3 class="txt-black hidden-md hidden-lg text-center text-uppercase"><img src="<?php echo base_url(); ?>cntnt/blank.gif" class="flag flag-dk" alt="Denmark" /> DENMARK OFFICE</h3>
            <address class="txt-black hidden-md hidden-lg text-center">
              <i class="fa fa-map-marker txt-ozone"></i>
              Birkhøjvej 7, 2800 Kongens<br />
              Lyngby, Copenhagen<br />
              <a class="txt-black" href="mailto:europe@ozonepedia.com" title="Oxyzonetherapy email address" class="txt-black">
              <i class="fa fa-envelope-o txt-blue"></i> europe@ozonepedia.com</a>
            </address>
          </div>
          <div class="col-md-4 col-xs-12">
            <h3 class="txt-black text-center text-uppercase"><img src="<?php echo base_url(); ?>cntnt/blank.gif" class="flag flag-za" alt="South Africa" /> SOUTH AFRICA OFFICE</h3>
            <address class="txt-black text-center">
              <i class="fa fa-map-marker txt-ozone"></i>
              16 Andries Pretorius Drive, Eastleigh<br />
              Edenvale, Gauteng, Johannesburg<br />
              South Africa - 1609<br />
              <a class="txt-black" href="mailto:ozoneengineering@gmail.com" title="Oxyzonetherapy email address" class="txt-black">
              <i class="fa fa-envelope-o txt-blue"></i> ozoneengineering@gmail.com</a>
            </address>
          </div>
          <div class="col-md-4 col-xs-12">
            <h3 class="txt-black hidden-xs hidden-sm text-right text-uppercase"><img src="<?php echo base_url(); ?>cntnt/blank.gif" class="flag flag-in" alt="India" /> INDIA OFFICE</h3>
            <address class="txt-black hidden-sm hidden-xs text-right">
              <i class="fa fa-map-marker txt-ozone"></i>
              C2/23 G L Roy Rd, S M Nagar<br />
              Sarkarpool, Maheshtala, Kolkata<br />
              West Bengal - 700143<br />
              <a class="txt-black" href="mailto:office@teamwaterhouse.com" title="Oxyzonetherapy email address" class="txt-black">
              <i class="fa fa-envelope-o txt-blue"></i> office@teamwaterhouse.com</a>
            </address>
            <h3 class="txt-black hidden-md hidden-lg text-center text-uppercase"><img src="<?php echo base_url(); ?>cntnt/blank.gif" class="flag flag-in" alt="India" /> INDIA OFFICE</h3>
            <address class="hidden-md hidden-lg text-center text-uppercase">
              <i class="fa fa-map-marker txt-ozone"></i>
              C2/23 G L Roy Rd, S M Nagar<br />
              Sarkarpool, Maheshtala, Kolkata<br />
              West Bengal - 700143<br />
              <a class="txt-black" href="mailto:office@teamwaterhouse.com" title="Oxyzonetherapy email address" class="txt-black">
              <i class="fa fa-envelope-o txt-blue"></i> office@teamwaterhouse.com</a>
            </address>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-xs-12"></div>
          <div class="col-sm-4 col-xs-12">
            <p class="text-center txt-fff">2018 - 2019 © By Oxyzonetherapy</p>
          </div>
          <div class="col-sm-4 col-xs-12">
            <p class="hidden-xs text-right text-uppercase">
              <a href="https://anupammondal.in" title="Developer Anupam Mondal https://anupammondal.in">Created by Anupam</a>
            </p>
            <p class="hidden-sm hidden-md hidden-lg text-center text-uppercase">
              <a href="https://anupammondal.in" title="Developer Anupam Mondal https://anupammondal.in">Created by Anupam</a>
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
  </body>
</html>
