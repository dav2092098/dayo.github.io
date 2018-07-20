<!DOCTYPE html>
<html lang="en" class="no-js" itemscope itemtype="http://schema.org/WebPage">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Cache-control" content="no-cache">
  <title>AYODELE - Simple, Sturdy, Sleek, and Speedy Web Design</title><!-- Title of your website (maximum length is 60-70 characters) -->

  <meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- Defines what mode should Internet Explorer & MS Edge use to display the content (compatibility) -->
  <meta name="viewport" content="width=device-width, initial-scale=1"><!-- Meta tag for responsive web design viewport  -->
  <meta name="handheldFriendly" content="true"><!-- General standard for identifying mobile-ready websites -->
  <meta name="description" content="Description of your website"><!-- Maximum length 155 characters -->
  <meta name="author" content="Your name">
  <meta name="subject" content="Title of the website"><!-- Title of your website (maximum length is 60-70 characters) -->
  <meta name="language" content="English"><!-- Language of your website -->
  <meta name="robots" content="index,follow"><!-- Allow/Disallow search enine robots to index and crawl your website -->
  <meta name="googlebot" content="index,follow"><!-- Allow/Disallow Google robot to index and crawl your website -->
  <meta name="classification" content="business"><!-- Classification of your website -->
  <meta name="url" content=""><!-- URL of the website -->
  <meta name="identifier-URL" content=""><!-- URL of your website -->
  <meta name="coverage" content="Worldwide"><!-- Options: http://xml.coverpages.org/country3166.html -->
  <meta name="distribution" content="Global"><!-- Global - your website is intended for everyone; Local - for local distribution of your document; IU - Internal Use, not intended for public distribution -->
  <meta name="rating" content="General"><!-- Rating of your website -->
  <link rel="author" href="https://plus.google.com/+YourGooglePlusProfile">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="./images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="./images/favicon/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="./images/favicon/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="./images/favicon/manifest.json">
  <link rel="mask-icon" href="./images/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="./images/favicon/favicon.ico">
  <meta name="msapplication-config" content="./images/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <!-- Facebook OpenGraph tags -->
  <meta property="og:title" content=""><!-- Title of yuor website -->
  <meta property="og:type" content="website"><!-- Type of the Facebook OpenGraph tag -->
  <meta property="og:description" content=""><!-- Description of your website -->
  <meta property="og:image" content=""><!-- URL to thumbnail image for your website -->
  <meta property="og:url" content=""><!-- URL of your website -->
  <meta property="og:locale" content="en_US"><!-- Default language of your website -->
  <meta property="og:site_name" content=""><!-- Name of your website -->
  
  <!-- Twitter cards tags -->
  <meta name="twitter:card" content="summary"><!-- Type of Twitter card -->
  <meta name="twitter:creator" content=""><!-- Your Twitter handler (with '@') -->
  <meta name="twitter:title" content=""><!-- Title of your website -->
  <meta name="twitter:description" content=""><!-- Desription of your website -->
  <meta name="twitter:image" content="" ><!-- URL to thumbnail image for your website -->
  <meta name="twitter:url" content=""><!-- URL of your website -->
  
  <!--  Google+ / Schema.org -->
  <meta itemprop="name" content=""><!-- Title of your website -->
  <meta itemprop="description" content=""><!-- Desription of your website -->
  <meta itemprop="image" content=""><!-- URL to thumbnail image for your website -->

  <!-- Fonts -->
  <!-- Open Sans font hosted on CDN -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800">

  <!-- Raleway font hosted on CDN -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700">

  <!-- Material design icon font hosted on CDN -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- Fontawesome icon font -->
  <!-- Version hosted on CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Version on local server -->
  <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->

  <!-- Bootstrap Stylesheet -->
  <link rel="stylesheet" href="./css/bootstrap.min.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">

  <!-- Master Stylesheet -->
  <!--?<?php echo date('l jS \of F Y h:i:s A'); ?>-->
  <link rel="stylesheet" href="./css/main.min.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">

  
  <!-- Theme Stylesheet - Uncomment the link below to apply color theme (and change the "alizarin" to any color you want to use) -->
  <!-- <link rel="stylesheet" href="./css/themes/trinity-alizarin.min.css"> -->
<style type="text/css">
.nav-link {
    color: #cfe4ef;
}

.navbar-brand-text:focus, .navbar-brand-text:hover  {
    color: rgba(33,150,243,.9);
}

.navbar-brand-text {
    display: inline-block;
    padding-top: .3125rem;
    padding-bottom: .3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap;
}

.blue_text {
    color: #48a6f1;
}

.solid {
  background-color: rgba(255, 255, 255, 1);
  /*transition: background-color 1s ease 0s;*/
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  transition: all 1s ease;
}

.transparent {
  background-color: rgba(255, 255, 255, 0);
  transition: background-color 1s ease 0s;
}

.navbar_container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

.animatable {  
  /* initially hide animatable objects */
  visibility: hidden;
  
  /* initially pause animatable objects their animations */
  -webkit-animation-play-state: paused;   
  -moz-animation-play-state: paused;     
  -ms-animation-play-state: paused;
  -o-animation-play-state: paused;   
  animation-play-state: paused; 
}

/* show objects being animated */
.animated {
  visibility: visible;  
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;  
  -webkit-animation-duration: 2s;
  -moz-animation-duration: 2s;
  -ms-animation-duration: 2s;
  -o-animation-duration: 2s;
  animation-duration: 2s;

  -webkit-animation-play-state: running;
  -moz-animation-play-state: running;
  -ms-animation-play-state: running;
  -o-animation-play-state: running;
  animation-play-state: running;
}

@-webkit-keyframes zoomin {
	0% {
		margin-left: 150px;
	}

	60% {
		margin-left: 80px;
	}

	80% {
		margin-left: 40px;
	}

	100% {
		margin-left: 0px;
	}
}

@-moz-keyframes zoomin {
	0% {
		margin-left: 150px;
	}

	60% {
		margin-left: 80px;
	}

	80% {
		margin-left: 40px;
	}

	100% {
		margin-left: 0px;
	}
}

@-o-keyframes zoomin {
	0% {
		margin-left: 150px;
	}

	60% {
		margin-left: 80px;
	}

	80% {
		margin-left: 40px;
	}

	100% {
		margin-left: 0px;
	}
}

@keyframes zoomin {
	0% {
		margin-left: 150px;
	}

	60% {
		margin-left: 80px;
	}

	80% {
		margin-left: 40px;
	}

	100% {
		margin-left: 0px;
	}
}


.animated.animationDelay{
	animation-delay:.4s;
	-webkit-animation-delay:.4s;
}
.animated.animationDelayMed{
	animation-delay:1.2s;
	-webkit-animation-delay:1.2s;
}
.animated.animationDelayLong{
	animation-delay:1.6s;
	-webkit-animation-delay:1.6s;
}
.animated.zoomin {
	-webkit-animation-name: zoomin;
	-moz-animation-name: zoomin;
	-o-animation-name: zoomin;
	animation-name: zoomin;
}

</style>
</head>

<body>
  <div class="wrapper">
    <!--[if lt IE 9]>
      <p class="upgrade-browser">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Header -->
    <header class="website-header fixed-top">
      <div class="navbar_container">
        <!-- Main navigation -->
        <nav class="navbar navbar-expand-md navbar-light navbar-trinity">
          <!-- Webste logo -->
          <a class="navbar-brand-text" href="index.html" aria-label="Visit homepage">AYODELE</a>
    
          <!-- Toggle button for mobile navigation -->
          <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navigation-main" aria-controls="navigation-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
    
            <!-- <span class="navbar-toggler-icon"></span> -->
    
            <span class="icon-bar"></span>
    
            <span class="icon-bar"></span>
    
            <span class="icon-bar"></span>
          </button>
    
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse justify-content-end" id="navigation-main">
            <ul class="js-nav nav navbar-nav navbar-right">
              <li class="nav-item">
                <a class="nav-link" href="#top" aria-label="Visit homepage">Home</a>
              </li>
    
              <li class="nav-item">
                <a class="nav-link" href="#slider" aria-label="Scroll to Features">Features</a>
              </li>
    
              <li class="nav-item">
                <a class="nav-link" href="#process" aria-label="Scroll to Process">Process</a>
              </li>
    
              <li class="nav-item">
                <a class="nav-link" href="#packages" aria-label="Scroll to Packages">Packages</a>
              </li>
    
              <li class="nav-item">
                <a class="nav-link" href="#testimonials" aria-label="Scroll to Testimonials">Testimonials</a>
              </li>
    
              <li class="nav-item">
                <a class="nav-link" href="#contact" aria-label="Scroll to Contact">Contact</a>
              </li>
            </ul>
          </div><!-- end .navbar-collapse -->
        </nav><!-- end .navbar -->
      </div>
    </header><!-- end Header -->

    <!-- Hero -->
    <section id="top" class="section--hero hero hero--home js-hero--video hero--video">
      <div class="hero__overlay">
        <div class="hero__content">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <h1>Sleek, Sturdy, and Speedy web sites</h1>
    
                <p>with cutting-edge security and straightforward pricing, use the contact form and someone will reply promptly.</p>
              </div>
    
              <!-- Hero login form container -->
              <div class="col-md-6">
                <div class="card card--small card--hero">
                  <h2 class="heading--tertiary">Login to your <span class="text--highlight">account</span></h2>
    
                  <!-- Hero login form -->
                  <form id="formHero" class="js-form js-form--hero form form--hero" action="#" method="post">
                    <!-- Email input -->
                    <div class="form-group">
                      <input id="heroEmail" class="form-element form-element-transparent" name="heroEmail" type="email" required>
    
                      <label class="form-label" for="heroEmail">Email</label>
                    </div><!-- .end Email input -->
    
                    <!-- Password input -->
                    <div class="form-group">
                      <input id="heroPassword" class="form-element form-element-transparent" name="heroPassword" type="password" required>
    
                      <label class="form-label" for="heroPassword">Password</label>
                    </div><!-- .end Password input -->
    
                    <!-- Repeat password input -->
                    <div class="form-group">
                      <input id="heroRepPassword" class="form-element form-element-transparent" name="heroRepPassword" type="password" required>
    
                      <label class="form-label" for="heroRepPassword">Repeat Password</label>
                    </div><!-- .end Repeat password input -->
    
                    <div class="form-group btn__container">
                      <button class="btn btn--full btn--full--primary btn--round" type="submit" value="Get Started">Submit</button>
                    </div>
                  </form><!-- .end Hero login form -->
                </div>
              </div><!-- .end Hero login form container -->
            </div>
          </div>
        </div>
      </div>
    
      <!-- Hero video -->
      <div class="video-container">
        <video autoplay loop muted poster="./images/bcgs/video-poster.jpg" preload="auto">
          <source src="./videos/hero-video.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
          <source src="./videos/hero-video.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
    
          <!-- Fallback image for browsers not supporting HTML5 video -->
          <img src="./images/bcgs/video-poster.jpg" title="Your browser does not support the video tag. I suggest you upgrade your browser.">
        </video>
      </div><!-- .end Hero video -->
    </section><!-- end. Hero -->

    <!-- Insert - logos -->
    <div class="insert insert--shadow insert--logos">
      <div class="container">
        <ul class="logos__list">
          <!-- Logo of Microsoft -->
          <li data-logo="Micorosoft">
            <img class="js-lazy lazy insert__logo" src="./images/loader.gif" data-src="./images/logos/logo--microsoft--bw.svg" alt="Microsoft logo">
    
            <!-- Fallback for browsers without JavaScript -->
            <noscript>
              <img class="insert__logo" src="./images/logos/logo--microsoft--bw.svg" alt="Microsoft logo">
            </noscript>
          </li><!-- .end Logo of Microsoft -->
    
          <!-- Logo of Uber -->
          <li data-logo="Uber">
            <img class="js-lazy lazy insert__logo" src="./images/loader.gif" data-src="./images/logos/logo--uber--bw.svg" alt="UBER logo">
    
            <!-- Fallback for browsers without JavaScript -->
            <noscript>
              <img class="insert__logo" src="./images/logos/logo--uber--bw.svg" alt="UBER logo">
            </noscript>
          </li><!-- .end Logo of Uber -->
    
          <!-- Logo of SpaceX -->
          <li data-logo="SpaceX">
            <img class="js-lazy lazy insert__logo" src="./images/loader.gif" data-src="./images/logos/logo--spacex--bw.svg" alt="SpaceX logo">
    
            <!-- Fallback for browsers without JavaScript -->
            <noscript>
              <img class="insert__logo" src="./images/logos/logo--spacex--bw.svg" alt="SpaceX logo">
            </noscript>
          </li><!-- .end Logo of SpaceX -->
    
          <!-- Logo of Avast -->
          <li data-logo="Avast">
            <img class="js-lazy lazy insert__logo" src="./images/loader.gif" data-src="./images/logos/logo--avast--bw.svg" alt="Avast logo">
    
            <!-- Fallback for browsers without JavaScript -->
            <noscript>
              <img class="insert__logo" src="./images/logos/logo--avast--bw.svg" alt="Avast logo">
            </noscript>
          </li><!-- .end Logo of Avast -->
    
          <!-- Logo of Tesla Motors -->
          <li data-logo="Tesla Motors">
            <img class="js-lazy lazy insert__logo" src="./images/loader.gif" data-src="./images/logos/logo--tesla-motors--bw.svg" alt="Samsung logo">
    
            <!-- Fallback for browsers without JavaScript -->
            <noscript>
              <img class="insert__logo" src="./images/logos/logo--tesla-motors--bw.svg" alt="Samsung logo">
            </noscript>
          </li><!-- .end Logo of Tesla Motors -->
    
          <!-- Logo of PayPal -->
          <li data-logo="PayPal">
            <img class="js-lazy lazy insert__logo" src="./images/loader.gif" data-src="./images/logos/logo--paypal--bw.svg" alt="Paypal logo">
    
            <!-- Fallback for browsers without JavaScript -->
            <noscript>
              <img class="insert__logo" src="./images/logos/logo--paypal--bw.svg" alt="Paypal logo">
            </noscript>
          </li><!-- .end Logo of PayPal -->
        </ul>
      </div>
    </div><!-- .end Insert - logos -->

    <!-- Section - Features -->
    <section id="slider" class="section--slider section--grey">
      <div class="container">
        <div class="row trinity-slider__wrapper">
          <div class="col-md-3">
            <!-- Slider buttons on the left -->
            <ul class="js-trinity-slider trinity-slider">
              <!-- Slider button Design -->
              <li>
                <a class="slider__link slider__link--active" href="#slideDesign">
                  <span class="slider__icon"><i class="fa fa-pencil"></i></span>
    
                  <span class="slider__link__title">Design</span>
                </a>
              </li><!-- .end Slider button Design -->
    
              <!-- Slider button Front-end -->
              <li>
                <a class="slider__link" href="#slideFrontEnd">
                  <span class="slider__icon"><i class="fa fa-desktop"></i></span>
    
                  <span class="slider__link__title">Front-End</span>
                </a>
              </li><!-- .end Slider button Front-end -->
    
              <!-- Slider button Back-end -->
              <li>
                <a class="slider__link" href="#slideBackEnd">
                  <span class="slider__icon"><i class="fa fa-database"></i></span>
    
                  <span class="slider__link__title">Back-End</span>
                </a>
              </li><!-- .end Slider button Back-end -->
            </ul><!-- .end Slider buttons on the left -->
          </div>
    
          <div class="col-md-9">
            <!-- Slider - Slide one - Design -->
            <div id="slideDesign" class="js-slider__slide slider__slide slider__slide--active">
              <div class="row">
                <div class="col-md-8">
                  <h2 class="slide__heading">Pleasing to the human eye</h2>
    
                  <hr class="divider divider--left">
    
                  <p>Whether a a single or a multi-page project, your site will be designed to be easy to use, secure, and stylish. If you are trying to create a web application, presentation page or blog, we'll pick the right approach for you and ensure that it serves you well.
                  <p>When necessary, your project will use the most secure scripts and API's available and will remain beautiful along the way.</p>
    
                  <br>
    
                  <a class="btn btn--full btn--full--primary btn--round" href="#">Get Started</a>
                </div>
    
                <!-- Slider - Slide one - iPhone mockup -->
                <div class="col-md-4">
                  <div class="slide__mockup animatable bounceInRight zoomin">
                    <picture class="js-lazy lazy">
                      <source srcset="./images/mockups/iPhone-7-Mockup--gold.png 1x, ./images/mockups/iPhone-7-Mockup--gold@2x.png 2x">
                      <img src="./images/loader.gif" data-src="./images/mockups/iPhone-7-Mockup--gold.png" data-src-set="./images/mockups/iPhone-7-Mockup--gold.png 1x, ./images/mockups/iPhone-7-Mockup--gold@2x.png 2x" alt="Device mockup image.">
                    </picture>
    
                    <!-- Fallback for browsers without JavaScript -->
                    <noscript>
                      <picture>
                        <source srcset="./images/mockups/iPhone-7-Mockup--gold.png 1x, ./images/mockups/iPhone-7-Mockup--gold@2x.png 2x">
                        <img src="./images/mockups/iPhone-7-Mockup--gold.png" srcset="./images/mockups/iPhone-7-Mockup--gold.png 1x, ./images/mockups/iPhone-7-Mockup--gold@2x.png 2x" alt="Device mockup image.">
                      </picture>
                    </noscript>
                  </div>
                </div><!-- .end Slider - Slide one - iPhone mockup -->
              </div><!-- .end Slider - Slide one -->
            </div>
    
            <!-- .end Slider - Slide two - Front-end -->
            <div id="slideFrontEnd" class="js-slider__slide slider__slide">
              <div class="row">
                <div class="col-md-8">
                  <h2 class="slide__heading">Perfect on the client-side</h2>
    
                  <hr class="divider divider--left">
    
                  <p>Your site will be fast and easy to use. We'll choose the perfect interface for your needs and ensure that it's comfortable for users.</p>

                  <br>
    
                  <a class="btn btn--full btn--full--primary btn--round" href="#">Get Started</a>
                </div>
    
                <!-- .end Slider - Slide two - iPhone mockup -->
                <div class="col-md-4">
                  <div class="slide__mockup">
                    <picture class="js-lazy lazy">
                      <source srcset="./images/mockups/iPhone-7-Mockup--black.png 1x, ./images/mockups/iPhone-7-Mockup--black@2x.png 2x">
                      <img src="./images/mockups/iPhone-7-Mockup--black.png" data-src-set="./images/mockups/iPhone-7-Mockup--black.png 1x, ./images/mockups/iPhone-7-Mockup--black@2x.png 2x" alt="Device mockup image.">
                    </picture>
    
                    <!-- Fallback for browsers without JavaScript -->
                    <noscript>
                      <picture>
                        <source srcset="./images/mockups/iPhone-7-Mockup--black.png 1x, ./images/mockups/iPhone-7-Mockup--black@2x.png 2x">
                        <img src="./images/mockups/iPhone-7-Mockup--black.png" srcset="./images/mockups/iPhone-7-Mockup--black.png 1x, ./images/mockups/iPhone-7-Mockup--black@2x.png 2x" alt="Device mockup image.">
                      </picture>
                    </noscript>
                  </div>
                </div><!-- .end Slider - Slide two - iPhone mockup -->
              </div>
            </div><!-- .end Slider - Slide two - Front-end -->
    
            <!-- Slider - Slide three - Back-end -->
            <div id="slideBackEnd" class="js-slider__slide slider__slide">
              <div class="row">
                <div class="col-md-8">
                  <h2 class="slide__heading">Reliable on the server-side</h2>
    
                  <hr class="divider divider--left">
    
                  <p>With full backend development, your site will be capable of handling expected traffic and service loads while adhering to the highest standards on the net.
    
                  <br>
                  <br>
                  <a class="btn btn--full btn--full--primary btn--round" href="#">Get Started</a>
                </div>
    
                <!-- .end Slider - Slide three - iPhone mockup -->
                <div class="col-md-4">
                  <div class="slide__mockup">
                    <picture class="js-lazy lazy">
                      <source srcset="./images/mockups/iPhone-7-Mockup--white.png 1x, ./images/mockups/iPhone-7-Mockup--white@2x.png 2x">
                      <img src="./images/mockups/iPhone-7-Mockup--white.png" data-src-set="./images/mockups/iPhone-7-Mockup--white.png 1x, ./images/mockups/iPhone-7-Mockup--white@2x.png 2x" alt="Device mockup image.">
                    </picture>
    
                    <!-- Fallback for browsers without JavaScript -->
                    <noscript>
                      <picture>
                        <source srcset="./images/mockups/iPhone-7-Mockup--white.png 1x, ./images/mockups/iPhone-7-Mockup--white@2x.png 2x">
                        <img src="./images/mockups/iPhone-7-Mockup--white.png" srcset="./images/mockups/iPhone-7-Mockup--white.png 1x, ./images/mockups/iPhone-7-Mockup--white@2x.png 2x" alt="Device mockup image.">
                      </picture>
                    </noscript>
                  </div>
                </div><!-- .end Slider - Slide three - iPhone mockup -->
              </div>
            </div><!-- .end Slider - Slide three - Back-end -->
          </div>
        </div>
      </div>
    </section><!-- .end Section - Features -->

    <!-- Section - Pixel-perfect -->
    <section class="section--features">
      <div class="container">
        <div class="features__mockup">
          <!-- Apple Watch mockup -->
          <div class="col-md-6">
            <picture class="js-lazy lazy">
              <source srcset="./images/mockups/apple-watch-white-mockup.png 1x, ./images/mockups/apple-watch-white-mockup@2x.png 2x">
              <img src="./images/loader.gif" data-src="./images/mockups/apple-watch-white-mockup.png" data-src-set="./images/mockups/apple-watch-white-mockup.png 1x, ./images/mockups/apple-watch-white-mockup@2x.png 2x" alt="Wearable device mockup.">
            </picture>
    
            <!-- Fallback for browsers without JavaScript -->
            <noscript>
              <picture>
                <source srcset="./images/mockups/apple-watch-white-mockup.png 1x, ./images/mockups/apple-watch-white-mockup@2x.png 2x">
                <img src="./images/mockups/apple-watch-white-mockup.png" srcset="./images/mockups/apple-watch-white-mockup.png 1x, ./images/mockups/apple-watch-white-mockup@2x.png 2x" alt="Wearable device mockup.">
              </picture>
            </noscript>
          </div><!-- .end Apple Watch mockup -->
    
          <div class="col-md-6">
            <h1>Pixel-perfect in every size</h1>
    
            <hr class="divider divider--left">
    
            <p>Every site is designed to be mobile first. Every component and every page looks great on any screen size, from mobile to large desktops, even TVs.</p>
            <br>
            <div class="features__list row">
              <div class="col-sm-2">
                <i class="fa fa-pencil features__icon"></i>
              </div>
    
              <div class="col-sm-10">
                <h4>Pixel-perfect design</h4>
    
                <small>Designed with an obsessive attention to detail, your site will be one of the most beautiful you can find.</small>
              </div>
            </div>
    
            <br>
    
            <!-- Sub-features with icons -->
            <div class="features__list row">
              <div class="col-sm-2">
                <i class="fa fa-cogs features__icon"></i>
              </div>
    
              <div class="col-sm-10">
                <h4>Easy to customize</h4>
    
                <small>We'll walk through customization, if needed, and a UI (user interface) will be provided that'll give you everything you need to edit key content. The design approach will be minimalistic and modern. All you'll need to provide is your content.</small>
              </div>
            </div><!-- .end Sub-features with icons -->
          </div>
        </div>
      </div>
    </section><!-- .end Section - Pixel-perfect -->

    <!-- Section - Lightning fast -->
    <section class="section--featuresThree section--grey">
      <div class="container">
        <!-- Main content -->
        <div class="slide__mockup">
          <div class="col-md-6">
            <h2 class="slide__heading">Lightning fast and simple</h2>
    
            <hr class="divider divider--left">
    
            <p>We'll use fast-performing templates designed to be easy to use and stylish. If you are trying to create a new website, presentation page or blog, this is definitely a great fit for you. We'll choose from many example pages with multiple sections that look amazing in any combination.</p>
    
            <br>
          </div><!-- .end Main content -->
    
          <!-- Safari browser mockup -->
          <div class="col-md-6">
            <picture class="js-lazy lazy">
              <source srcset="./images/mockups/safari-yosemite-mockup.png 1x, ./images/mockups/safari-yosemite-mockup@2x.png 2x">
              <img src="./images/loader.gif" data-src="./images/mockups/safari-yosemite-mockup.png" data-src-set="./images/mockups/safari-yosemite-mockup.png 1x, ./images/mockups/safari-yosemite-mockup@2x.png 2x" alt="Browser mockup">
            </picture>
    
            <!-- Fallback for browsers without JavaScript -->
            <noscript>
              <picture>
                <source srcset="./images/mockups/safari-yosemite-mockup.png 1x, ./images/mockups/safari-yosemite-mockup@2x.png 2x">
                <img src="./images/mockups/safari-yosemite-mockup.png" srcset="./images/mockups/safari-yosemite-mockup.png 1x, ./images/mockups/safari-yosemite-mockup@2x.png 2x" alt="Browser mockup">
              </picture>
            </noscript>
          </div>
        </div>
      </div>
    </section><!-- .end Section - Lightning fast -->

    <!-- Section - Our process -->
    <section id="process" class="section--process">
      <div class="container">
        <h1 class="heading--primary text-center">The process</h1>
    
        <hr class="divider">
    
        <p class="text-center">The development process used is key. We'll use one that's proven to be reliable and will serve you well.</p>
    
        <br>
    
        <div class="row text-center">
          <!-- Ideation & Research -->
          <div class="col-md-4">
            <div class="process__icon">
              <img class="js-lazy lazy" src="./images/loader.gif" data-src="./images/icons/icon--idea-2048.svg" alt="Lightbulb icon">
    
              <!-- Fallback for browsers without JavaScript -->
              <noscript>
                <img src="./images/icons/icon--idea-2048.svg" alt="Lightbulb icon">
              </noscript>
            </div>
    
            <h3 class="process__title">Ideation &amp; Research</h3>
    
            <br>
    
            <p class="process__info">There are always many different ideas to act upon. Hard thing is to choose the right ones. Together, We'll find the right path quickly so you can spend your time on what you like.</p>
          </div><!-- .end Ideation & Research -->
    
          <!-- Design & Development -->
          <div class="col-md-4">
            <div class="process__icon">
              <img class="js-lazy lazy" src="./images/loader.gif" data-src="./images/icons/icon--pen-2048.svg" alt="Pen icon">
    
              <!-- Fallback for browsers without JavaScript -->
              <noscript>
                <img src="./images/icons/icon--pen-2048.svg" alt="Pen icon">
              </noscript>
            </div>
    
    
            <h3 class="process__title">Design &amp; Development</h3>
    
            <br>
    
            <p class="process__info">When the research is done and the goal we want to achieve is set, the design and development phase begins and we'll work together to make your dream a reality.</p>
          </div><!-- .end Design & Development -->
    
          <!-- Delivery & Feedback -->
          <div class="col-md-4">
            <div class="process__icon">
              <img class="js-lazy lazy" src="./images/loader.gif" data-src="./images/icons/icon--cargo-2048.svg" alt="Cargo icon">
    
              <!-- Fallback for browsers without JavaScript -->
              <noscript>
                <img src="./images/icons/icon--cargo-2048.svg" alt="Cargo icon">
              </noscript>
            </div>
    
            <h3 class="process__title">Delivery &amp; Feedback</h3>
    
            <br>
    
            <p class="process__info">After polishing the last pixel and testing every line of code, the project will be handed over to you for feedback and to let you decide how best to deploy.</p>
          </div><!-- .end Delivery & Feedback -->
        </div>
      </div>
    </section><!-- .end Section - Our process -->

    <!-- Section - Choose your plan -->
    <section id="packages" class="section--packages section--grey">
      <div class="container">
        <h1 class="text-center">Choose your plan</h1>
        <center>
        <!-- . Payment Form -->
        <form action="./stripe_charge.php" method="POST">
        <script
          src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="pk_test_iYqFYrdQDdaui1eTm69pZnIT"
          data-amount="999"
          data-name="dayo"
          data-description="Example charge"
          data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
          data-locale="auto">
        </script>
        </form>
        <!-- .end Payment Form -->
        </center>
        <hr class="divider">
        <p class="text-center">No haggling, no fuss. Pricing is as straighforward as it gets.</p>
        <br>
        <div class="row">
          <!-- Plan Basic -->
          <div class="col-md-6 col-lg-4">
            <article class="plan__container">
              <header class="plan__head">
                <h4>Basic</h4>
              </header>
    
              <div class="plan__body">
                <p class="plan__price">&dollar;500<span>timeframe = 24-48 hours</span></p>
    
                <ul class="plan__features">
                  <li><span>&check;</span> Single-page/Landing page/Form </li>
    
                  <li><span>&check;</span> Basic UI</li>
    
                  <li><span>&check;</span> Free SSL Setup</li>
    
                  <li><span>&check;</span> Free Domain Email Setup</li>
    
                  <li><span>&check;</span> WordPress Integration (if needed)</li>
    
                  <li><span>&check;</span> No Hosting</li>
                </ul>
              </div>
    
              <footer class="plan__footer">
                <a class="btn btn--ghost btn--ghost--primary btn--round plan__btn" href="#">Get Started</a>
              </footer>
            </article>
          </div><!-- Plan Basic -->
    
          <!-- Plan Standard -->
          <div class="col-md-6 col-lg-4">
            <article class="plan__container plan__container--highlighted">
              <header class="plan__head">
                <h4>Standard</h4>
              </header>
    
              <div class="plan__body">
                <p class="plan__price">&dollar;1000<span>timeframe = 48-160 hours</span></p>
    
                <ul class="plan__features">
                  <li><span>&check;</span> 2-5 pages/Full Blog site/2-5 Forms</li>
    
                  <li><span>&check;</span> Basic UI</li>
    
                  <li><span>&check;</span> Free SSL Setup</li>
    
                  <li><span>&check;</span> Free Domain Email Setup</li>
    
                  <li><span>&check;</span> WordPress Integration (if needed)</li>
    
                  <li><span>&check;</span> Hosting &amp; Phone Setup</li>
                </ul>
              </div>
    
              <footer class="plan__footer">
                <a class="btn btn--full btn--full--white btn--round plan__btn" href="#">Get Started</a>
              </footer>
            </article>
          </div><!-- Plan Standard -->
    
          <!-- Plan Premium -->
          <div class="col-md-6 col-lg-4">
            <article class="plan__container">
              <header class="plan__head">
                <h4>Custom</h4>
              </header>
    
              <div class="plan__body">
                <p class="plan__price">&dollar;2000<span>timeframe > 160 hours</span></p>
    
                <ul class="plan__features">
                  <li><span>&check;</span> 6-10 pages/6-10 Forms</li>
    
                  <li><span>&check;</span> Custom UI</li>
    
                  <li><span>&check;</span> Free SSL Setup</li>
    
                  <li><span>&check;</span> Free Domain Email Setup</li>
    
                  <li><span>&check;</span> WordPress Integration (if needed)</li>
    
                  <li><span>&check;</span> Hosting, Phone Setup, &amp; 24/7 Support</li>
                  
                </ul>
              </div>
    
              <footer class="plan__footer">
                <a class="btn btn--ghost btn--ghost--primary btn--round plan__btn" href="#">Get Started</a>
              </footer>
            </article>
          </div><!-- .end Plan Premium -->
        </div>
    
        <br>
      </div>
    </section><!-- .end Section - Choose your plan -->

    <!-- Section - What buyers say -->
    <section id="testimonials" class="section--testimonials">
      <div class="container">
        <h1 class="text-center">What clients say</h1>
    
        <hr class="divider">
    
        <p class="text-center">David is reliable, professional, and knowledgeable. He will serve you well.</p>
    
        <br>
    
        <!-- Testimonials -->
        <div class="row">
          <!-- Testimonial one - Web Developer -->
          <div class="col-md-6 col-lg-4">
            <div class="testimonial-quote__container">
              <div class="testimonial__text">
                <span class="testimonial__quote quote-left">&ldquo;</span>Excellent service! Sleek, modern and easy to use design. Just awesome. You did a really good job.<span class="testimonial__quote quote-right">&rdquo;</span>
              </div>
    
              <div class="testimonial__author">
                <div class="testimonial__name">
                  <h4>Jeremy Scott</h4>
    
                  <h5>Web Desginer</h5>
                </div>
    
                <div class="testimonial__photo">
                  <picture class="js-lazy lazy">
                    <source srcset="./images/avatars/avatar--jeremy.jpg 1x, ./images/avatars/avatar--jeremy@2x.jpg 2x">
                    <img src="./images/loader.gif" data-src="./images/avatars/avatar--jeremy.jpg" data-src-set="./images/avatars/avatar--jeremy.jpg 1x, ./images/avatars/avatar--jeremy@2x.jpg 2x" alt="Testimonial photo">
                  </picture>
    
                  <!-- Fallback for browsers without JavaScript -->
                  <noscript>
                    <picture>
                      <source srcset="./images/avatars/avatar--jeremy.jpg 1x, ./images/avatars/avatar--jeremy@2x.jpg 2x">
                      <img src="./images/avatars/avatar--jeremy.jpg" srcset="./images/avatars/avatar--jeremy.jpg 1x, ./images/avatars/avatar--jeremy@2x.jpg 2x" alt="Testimonial photo">
                    </picture>
                  </noscript>
                </div>
              </div>
            </div>
          </div><!-- .end Testimonial one - Web Developer -->
    
          <!-- Testimonial two - Photographer -->
          <div class="col-md-6 col-lg-4">
            <div class="testimonial-quote__container">
              <div class="testimonial__text">
                <span class="testimonial__quote quote-left">&ldquo;</span>I loved the template we chose! We must have gone through more than 90 before I found the right one! David was patient and encouraging throughout.<span class="testimonial__quote quote-right">&rdquo;</span>
              </div>
    
              <div class="testimonial__author">
                <div class="testimonial__name">
                  <h4>Susan Griffin</h4>
    
                  <h5>Photographer</h5>
                </div>
    
                <div class="testimonial__photo">
                  <picture class="js-lazy lazy">
                    <source srcset="./images/avatars/avatar--susan.jpg 1x, ./images/avatars/avatar--susan@2x.jpg 2x">
                    <img src="./images/loader.gif" data-src="./images/avatars/avatar--susan.jpg" data-src-set="./images/avatars/avatar--susan.jpg 1x, ./images/avatars/avatar--susan@2x.jpg 2x" alt="Testimonial photo">
                  </picture>
    
                  <!-- Fallback for browsers without JavaScript -->
                  <noscript>
                    <picture>
                      <source srcset="./images/avatars/avatar--susan.jpg 1x, ./images/avatars/avatar--susan@2x.jpg 2x">
                      <img src="./images/avatars/avatar--susan.jpg" srcset="./images/avatars/avatar--susan.jpg 1x, ./images/avatars/avatar--susan@2x.jpg 2x" alt="Testimonial photo">
                    </picture>
                  </noscript>
                </div>
              </div>
            </div>
          </div><!-- .end Testimonial two - Photographer -->
    
          <!-- Testimonial three - Freelancer -->
          <div class="col-md-6 col-lg-4">
            <div class="testimonial-quote__container">
              <div class="testimonial__text">
                <span class="testimonial__quote quote-left">&ldquo;</span>This is how working on a site should be. It never felt like a chore!<span class="testimonial__quote quote-right">&rdquo;</span>
              </div>
    
              <div class="testimonial__author">
                <div class="testimonial__name">
                  <h4>John Scully</h4>
    
                  <h5>Freelancer</h5>
                </div>
    
                <div class="testimonial__photo">
                  <picture class="js-lazy lazy">
                    <source srcset="./images/avatars/avatar--john.jpg 1x, ./images/avatars/avatar--john@2x.jpg 2x">
                    <img src="./images/loader.gif" data-src="./images/avatars/avatar--john.jpg" data-src-set="./images/avatars/avatar--john.jpg 1x, ./images/avatars/avatar--john@2x.jpg 2x" alt="Testimonial photo">
                  </picture>
    
                  <!-- Fallback for browsers without JavaScript -->
                  <noscript>
                    <picture>
                      <source srcset="./images/avatars/avatar--john.jpg 1x, ./images/avatars/avatar--john@2x.jpg 2x">
                      <img src="./images/avatars/avatar--john.jpg" srcset="./images/avatars/avatar--john.jpg 1x, ./images/avatars/avatar--john@2x.jpg 2x" alt="Testimonial photo">
                    </picture>
                  </noscript>
                </div>
              </div>
            </div>
          </div><!-- .end Testimonial three - Freelancer -->
        </div><!-- .end Testimonials -->
      </div>
    </section><!-- .end Section - What buyers say -->

    <!-- Insert - Get the best template -->
    <div class="insert insert--media insert--cta">
      <div class="container">
        <div class="cta__content text-center">
          <h1>Get the best design for your business</h1>
    
          <p>Get in contact today and we'll start searching!</p>
    
          <div class="btn__container">
            <a class="btn btn--full btn--full--primary btn--round" href="#">Get Started</a>
          </div>
        </div>
      </div>
    
      <div class="insert--overlay"></div>
    </div><!-- .end Insert - Get the best template -->

    <!-- Section - Contact -->
    <section id="contact" class="section--contact">
      <div class="container">
        <h1 class="text-center">Let's talk!</h1>
    
        <hr class="divider">
    
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <p class="text-center">Tell me a a little bit about your project. Contact me and together we will help you realize your vision faster than you can imagine. I'll get back to you within a couple of hours.</p>
          </div>
        </div>
    
        <br>
    
        <!-- Contact form -->
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <form id="formContact" class="js-form js-form--contact form form--contact" action="#" method="post">
              <div class="row">
                <div class="col-sm-6">
                  <!-- Input - Name -->
                  <fieldset class="form-group">
                    <input id="contactName" class="form-element form-element-transparent" name="contactName" type="text" required>
    
                    <label class="form-label" for="heroEmail">Name</label>
                  </fieldset><!-- .end Input - Name -->
                </div>
    
                <div class="col-sm-6">
                  <!-- Input - Email -->
                  <fieldset class="form-group">
                    <input id="contactEmail" class="form-element form-element-transparent" name="contactEmail" type="email" required>
    
                    <label class="form-label" for="heroEmail">Email</label>
                  </fieldset><!-- .end Input - Email -->
                </div>
              </div>
    
              <!-- Input - Subject -->
              <fieldset class="form-group">
                <input id="contactSubject" class="form-element form-element-transparent" name="contactSubject" type="text" required>
    
                <label class="form-label" for="heroEmail">Subject</label>
              </fieldset><!-- .end Input - Subject -->
    
            <!-- Message -->
              <fieldset class="form-group">
                <textarea id="contactMessage" class="form-element form-element-transparent" name="contactMessage" cols="30" rows="5" required></textarea>
    
                <label class="form-label" for="contactMessage">Message</label>
              </fieldset><!-- .end Message -->
    
              <div class="form-group btn__container">
                <button class="btn btn--full btn--full--primary btn--round" form="formContact"  type="submit" value="Submit message">Submit message</button>
              </div>
            </form><!-- .end Contact form -->
          </div>
        </div>
      </div>
    </section><!-- .end Section - Contact -->

    <!-- Footer -->
    <footer>
      <div class="container">
        <a class="js-top btn--fab btn--fab--primary btn--fab--medium" href="#top"><i class="fa fa-angle-up"></i></a>
    
        <!-- Social media icons (cheatsheet for icons: http://fontawesome.io/cheatsheet/) -->
        <ul class="nav--social">
          <!-- Social media icon - Twitter -->
          <li>
            <a href="#" class="link--default"><i class="fa fa-twitter"></i></a>
          </li>
    
          <!-- Social media icon - Google+ -->
          <li>
            <a href="#" class="link--default"><i class="fa fa-google-plus"></i></a>
          </li>
    
          <!-- Social media icon - Facebook -->
          <li>
            <a href="#" class="link--default"><i class="fa fa-facebook"></i></a>
          </li>
    
          <!-- Social media icon - Linkedin -->
          <li>
            <a href="#" class="link--default"><i class="fa fa-linkedin"></i></a>
          </li>
    
          <li class="list-break"></li>
    
          <!-- Social media icon - Pinterest -->
          <li>
            <a href="#" class="link--default"><i class="fa fa-pinterest"></i></a>
          </li>
    
          <!-- Social media icon - Dribbble -->
          <li>
            <a href="#" class="link--default"><i class="fa fa-dribbble"></i></a>
          </li>
    
          <!-- Social media icon - Instagram -->
          <li>
            <a href="#" class="link--default"><i class="fa fa-instagram"></i></a>
          </li>
        </ul><!-- .end Social media icons -->
    
        <!-- Copyright -->
        <small class="footer__copy d-block text-center">&copy;2018, Built by David Ayodele, Design by Alex Devero.</small>
      </div>
    </footer><!-- .end Footer -->
    

    <!-- Scripts -->
    <!-- jQuery library hosted on CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- or local version of jQuery library -->
    <script>
      var newEl = document.createElement('script');
      newEl.async = true;
      newEl.src = './js/vendor/jquery.min.js';
      var bodyEl = document.querySelector('body');
      bodyEl.appendChild(newEl);
    </script>
    
    <script>
    $(document).ready(function() {
        // Transition effect for navbar
        function getScrollPercent() {
          var h = document.documentElement, 
              b = document.body,
              st = 'scrollTop',
              sh = 'scrollHeight';
          return (h[st]||b[st]) / ((h[sh]||b[sh]) - h.clientHeight) * 100;
        }
        
        $(window).scroll(function() {
          // checks if window is scrolled more than 500px, adds/removes solid class
          //if($(this).scrollTop() > 200) {
          if (getScrollPercent() > 1) {
              $('.navbar').addClass('solid');
              $('.nav-link').addClass('blue_text');
              $('.navbar_container').addClass('solid');
          } 
          else {
              $('.navbar').removeClass('solid');
              $('.navbar_container').removeClass('solid');
              //$('.navbar').addClass('transparent');
              //$('.navbar_container').addClass('transparent');
              $('.nav-link').removeClass('blue_text');
          }
        });
    });
    </script>
    
    <script type="text/javascript">
    // Trigger CSS animations on scroll.
    // Detailed explanation can be found at http://www.bram.us/2013/11/20/scroll-animations/
    
    // Looking for a version that also reverses the animation when
    // elements scroll below the fold again?
    // --> Check https://codepen.io/bramus/pen/vKpjNP
    
    jQuery(function($) {
      
      // Function which adds the 'animated' class to any '.animatable' in view
      var doAnimations = function() {
        
        // Calc current offset and get all animatables
        var offset = $(window).scrollTop() + $(window).height(),
            $animatables = $('.animatable');
        
        // Unbind scroll handler if we have no animatables
        if ($animatables.length == 0) {
          $(window).off('scroll', doAnimations);
        }
        
        // Check all animatables and animate them if necessary
    		$animatables.each(function(i) {
           var $animatable = $(this);
    			if (($animatable.offset().top + $animatable.height() - 20) < offset) {
            $animatable.removeClass('animatable').addClass('zoomin');
    			}
        });
    
    	};
      
      // Hook doAnimations on scroll, and trigger a scroll
    	$(window).on('scroll', doAnimations);
      $(window).trigger('scroll');
    });
    </script>
    
    <!-- Plugin for lazyloading images -->
    <script src="./js/plugins/lazyload.min.js"></script>
    
    <!-- Bootstrap Scripts -->
    <script src="./js/vendor/bootstrap.min.js"></script>
    
    
    
    
    <!-- Main JavaScript file -->
    <script src="./js/main.min.js"></script>
    
    
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
  </div>
</body>
</html>
