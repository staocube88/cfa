<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Communion Faith Assembly :: About</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <style type="text/css">

    .video-link {
    display: inline-block;
    padding: 5px 10px;
    border-radius: 4px;
    text-decoration: none;
    color: white;
    background-color: #f03;
    box-shadow: 0 5px 10px -3px rgba(0,0,0,.5);
}

/* --- */
.player {
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,1);
    background: -webkit-radial-gradient(center, ellipse cover, rgba(0,0,0,.65) 0%, rgba(0,0,0,1) 100%);
    background: -moz-radial-gradient(center, ellipse cover, rgba(0,0,0,.65) 0%, rgba(0,0,0,1) 100%);
    background: -ms-radial-gradient(center, ellipse cover, rgba(0,0,0,.65) 0%, rgba(0,0,0,1) 100%);
    background: radial-gradient(center, ellipse cover, rgba(0,0,0,.65) 0%,rgba(0,0,0,1) 100%);

    opacity: 0;
    -webkit-transition: opacity 0.3s ease-in-out;
    transition: opacity 0.3s ease-in-out;
}

.player__video {
    position: relative;
    top: 50%;
    left: 50%; 
    width: auto;
    max-width: 75%;
    background-color: #fff;
    box-shadow: 0 0 50px rgba(0,0,0,.95);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
}

.js--show-video { opacity: 1; }

.video-filler {
    display: block;
    width: 100%;
}

.video-close {
    position: absolute;
    z-index: 0;
    top: 0;
    right: -30px;
    padding: 5px 10px;
    border: none;
    outline: none;
    border-radius: 0 50% 50% 0;
    cursor: pointer;
    font-size: 24px;
    color: #000;
    background-color: #fff;
    box-shadow: 0 0 20px rgba(0,0,0,.75);
}

.video-iframe {
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 10px solid #fff;
    }
    </style>




  <script type="text/javascript">

  var $iframe = $('iframe'),
    $videoLink = $('.video-link'),
    playerTemplate = '<div class="player"><div class="player__video"><div class="video-filler"></div><button class="video-close">&times;</button><iframe class="video-iframe" src="{{iframevideo}}" frameborder="0" allowfullscreen></iframe></div><div/>';


$videoLink.on('click', function(e) {
    var localTemplate = '',
        videoWidth = parseInt($(this).data('width')),
        videoHeight = parseInt($(this).data('height')),
        videoAspect = ( videoHeight / videoWidth ) * 100,
        // elements
        $player = null,
        $video = null,
        $close = null,
        $iframe = null;

    e.preventDefault();

    localTemplate = playerTemplate.replace('{{iframevideo}}', $(this).prop('href'));

    $player = $(localTemplate);

    $player
        .find('.video-filler')
        .css('padding-top', videoAspect + '%');

    $close = $player
        .find('.video-close')
        .on('click', function() {
            $(this).off().closest('.player').hide().remove();
        });

    $player.appendTo('body').addClass('js--show-video');
});
.video-link {
  </script>

  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"> <a href="index.php"><img src="images/cfaa.png"></a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>      
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li>
                        <a href="index.php">Home</a>
                      </li>
                      <li><a href="services.php">Our Services</a></li>
                      <li class="has-children active">
                        <a href="beliefs.php">Our Mandate</a>
                        <ul class="dropdown arrow-top">
                          <li><a href="beliefs.php">Beliefs</a></li>
                          <li><a href="pastors.php">Ministers</a></li>
                          <!-- <li><a href="beliefs.php">Services</a></li> -->
                          <li><a href="cfa_ministry.php">CFA Ministry</a></li>
                          <!-- <li class="has-children">
                            <a href="beliefs.php">CFA Ministry</a>
                            <ul class="dropdown">
                              <li><a href="beliefs.php">America</a></li>
                              <li><a href="beliefs.php">Europe</a></li>
                              <li><a href="beliefs.php">Asia</a></li>
                              <li><a href="beliefs.php">Africa</a></li>
                              
                            </ul>
                          </li> -->
                        </ul>
                      </li>
                      <li><a href="events.php">Events</a></li>
                      <li><a href="about.php">About</a></li>
                      <li><a href="contact.php">Contact</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div style="height: 113px;"></div>
    <div class="slide-one-item home-slider owl-carousel">
      
      

      <div class="site-blocks-cover" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1>About Us</h1>
              <p class="font-weight-normal">If you don't lose it your <b>MIND</b> you will soon have it in your <b>HANDS</b>.</p>
            </div>
          </div>
        </div>
      </div> 
    </div>

    
    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            
              <div class="img-border">
                <a class="video-link popup-vimeo image-play" target="_self" href="https://youtu.be/6CyBBBLNaPA" data-width="1920" data-height="1080">
                <!-- <a href="https://youtu.be/6CyBBBLNaPA" class="popup-vimeo image-play"> -->

                  <span class="icon-wrap">
                    <span class="icon icon-play"></span>
                  </span>
                  <img src="images/about_3.jpg" alt="" class="img-fluid">
                </a>
              </div>
            
          </div>
          <div class="col-md-5 ml-auto">
            <h2 class="h2 mb-3">About Our Church</h2>
            <p class="h5 mb-3">We Work Together to raise champions</p>
            <p class="mb-4">At Communion Faith Assembly (CFA), we are equipped with the word of God for growth and to raise Champions for God’s kingdom, A Glorious worship session that cause God to descend and bless his children. So we do not look at the bigness of any problem, but at the bigness of our God. </p>
            <p><a href="https://youtu.be/6CyBBBLNaPA" class="popup-vimeo text-uppercase">Watch Video <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-5 mb-5 mb-lg-0 order-1">
            <h2 class="mb-3 text-uppercase">Our <strong class="text-black font-weight-bold">Belief</strong></h2>
            <p class="lead">There is only one God who exists in three distinct persons: Father, Son and Holy Spirit.
          </p>
            <p class="mb-4">
              The Bible is God’s word to us to lead us to Himself and to guide our lives. It is without error and is the authority on which we base our faith, conduct and teachings.
              Jesus Christ is the Son of God who came to this earth as Savior of the world.
              Through His Holy Spirit, God lives in and through us now.
              Nothing in creation “just happened”. God created all things by His word and sustains all things and He is the final authority in every situation
              Jesus died on the cross, shed His blood for our sins and rose again on the third day. Salvation is found by placing our faith in what Jesus did for us on the cross.</p>
            <p><a href="#" class="btn btn-primary pill px-4">Read More</a></p>
          </div>
          <div class="col-md-12 col-lg-6 mr-auto order-2">
            <img src="images/new.jpg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-block-feature bg-light">
      <div class="container">
        <div class="d-block d-md-flex border-bottom">
          <div class="text-center p-4 item border-right">
            <span class="flaticon-paper-plane display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">Our Mission</h2>
            <p>This is a place where we gather together in quality praise and worship of the true and living God, equipped with the Word of God for growth and fellowship with one another in other to raise champions for Christ.</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
          <div class="text-center p-4 item">
            <span class="flaticon-chat-1 display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">Our Vision</h2>
            <p>Communion Faith Assembly (CFA) is big enough to contain you, small enough to reach you, and powerful enough to deal with anything the devil brings against you. Here we do not look at the bigness of your problem but the bigness of our God.</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
        <div class="d-block d-md-flex">
          <div class="text-center p-4 item border-right">
            <span class="flaticon-speaker display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">Prophectic Decleration</h2>
            <p>In this year, You shall not die but live to declare the glory of God in Jesus Name. I boldly decree into your life that year 2018 is your year of Fulfillment In the name of God the father, God the son & God the Holy Spirit. AMEN!</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
          <div class="text-center p-4 item">
            <span class="flaticon-avatar display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">Join Our Church!</h2>
            <p>Let's Journey Together Till We Reach Eternity
            Size & Caliber Doesn' Matter...God Does.</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2>Frequently Ask Questions</h2>
          </div>
        </div>
        

        <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
          <div class="col-md-8">
            <div class="accordion unit-8" id="accordion">
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">What is your beliefs?<span class="icon"></span></a>
              </h3>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>There is only one God who exists in three distinct persons: Father, Son and Holy Spirit.The Bible is God’s word to us to lead us to Himself and to guide our lives.</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->
            
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">Do I need to know the truth?<span class="icon"></span></a>
              </h3>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Yes,you surely deserve to know the truth. And the truth is that; "jesus Christ is the Son of God who came to this earth as Savior of the world. Through His Holy Spirit, God lives in and through us now. </p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Be save and be baptise?<span class="icon"></span></a>
              </h3>
              <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p> Be saved and baptise by the holy spirit and your life will never remain the same.</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">Where to Start?<span class="icon"></span></a>
              </h3>
              <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p> Accept Jesus Christ as your lord and savior, then be ready to sacrifice your life for him !</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

          </div>
          </div>
        </div>
      
      </div>
    </div>



    
        <div class="py-5 quick-contact-info">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div>
              <h2><span class="icon-room"></span> Location</h2>
              <p class="mb-0"> 185,Olabisi Onabanjo Way,<br> Iyana Mortuary, Abeokuta, Ogun-State.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <h2><span class="icon-clock-o"></span> Service Hour</h2>
              <p class="mb-0">Sunday Service at 10:00AM - 11:30AM <br>
              Bible Study On Tuesdays - 5:15PM <br>
              Workers Meeting On Sundays at 7:30AM <br>
              Beliver's Class On Sundays at 8:30AM <br>

              </p>

            </div>
          </div>
          <div class="col-md-4">
            <h2><span class="icon-comments"></span> Get In Touch</h2>
            <p class="mb-0">Email: church@communionfaithassembly.org.ng<br>
            Phone: (+234) 813-2915-001 </p>
          </div>
        </div>
      </div>
    </div>
     <footer class="site-footer">
      <div class="container">
        

        <div class="row">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4 text-white">Have You Been Blessed !</h3>
            <p>Has God Blessed You or He Has Laid In Your Heart To Bless The Ministry, Kindly Do So With The Following Details <br>
            Account Number: 0226351870 <br>
            Account Name: Communion Faith Assembly <br>
              Bank Name: Wema Bank <br> </p>
            <p><a href="#" class="btn btn-primary pill text-white px-4">Donate Now</a></p>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Quick Links</h3>
                  <ul class="list-unstyled">
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">contact</a></li>
                    <li><a href="beliefs.php">beliefs</a></li>
                    <li><a href="pastors.php">Ministers</a></li>
                    <li><a href="cfa_ministry.php">CFA Ministry</a></li>
                  </ul>
              </div>
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Ministries</h3>
                  <ul class="list-unstyled">
                    <li><a href="cfa_ministry.php">Children</a></li>
                    <li><a href="cfa_ministry.php">Women</a></li>
                    <li><a href="cfa_ministry.php">Youth</a></li>
                    <li><a href="cfa_ministry.php">Ladies</a></li>
                    <li><a href="cfa_ministry.php">Men</a></li>
                  </ul>
              </div>
            </div>
          </div>

          
          <div class="col-md-2">
            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social Icons</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                  <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                  <a href="#" class="p-2"><span class="icon-vimeo"></span></a>

                </p>
              </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | Designed with <i class="icon-heart text-warning" aria-hidden="true"></i> by <a href="https://complanettechnologies.com.ng" target="_blank" >Complanet Technologies</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  
  <script src="js/mediaelement-and-player.min.js"></script>

  <script src="js/main.js"></script>
    

  <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>

  </body>
</html>