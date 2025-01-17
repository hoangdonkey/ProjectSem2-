<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Non-Gorvermented Organization</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>


    </head>

    <body>


    <header class="main-header">


        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> <i class="fa fa-phone"></i> <a href="tel:">+212 658 986 213 </a> </li>
                             <li> <i class="fa fa-envelope"></i> <a href="mailto:Give-AID@gmail.com">Give-AID@gmail.com</a> </li>
                       </ul> <!-- /.header-contact  -->

                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-youtube"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa fa-pinterest-p"></i>  </a> </li>
                       </ul> <!-- /.header-social  -->

                    </div>


                  </div>
              </div>

            </div>

            <div class="navbar-main">

              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>

                  <a class="navbar-name" href="{{url('/')}}"><img src="assets/images/logo.png" class="logo-group" width="70px" height="70px"></a>

                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a class="is-active" href="{{url('/')}}">HOME</a></li>
                    <li><a href="{{url('/about')}}">ABOUT</a></li>
                    <li class=""><a href="{{url('causes')}}">CAUSES</a>

                      {{-- <ul class="submenu">
                         <li class="submenu-item"><a href="{{url('/causes')}}">Causes list </a></li>
                         <li class="submenu-item"><a href="{{url('/causes-single')}}">Single cause </a></li>
                         <li class="submenu-item"><a href="{{url('/causes-single')}}">Single cause </a></li>
                         <li class="submenu-item"><a href="{{url('/causes-single')}}">Single cause </a></li>
                      </ul> --}}

                    </li>
                    <li><a href="{{url('/gallery')}}">GALLERY</a></li>
                    <li><a href="{{url('/contact')}}">CONTACT</a></li>
                    @if( auth()->check() )
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('dashboard')}}">{{ auth()->user()->name }}</a>
                    </li>
                    @endif
                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->

            </div> <!-- /.navbar-main -->


        </nav>

    </header> <!-- /. main-header -->


    <!-- Carousel
    ================================================== -->
    <div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">

          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#homeCarousel" data-slide-to="1"></li>
            <li data-target="#homeCarousel" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner" role="listbox">

            <div class="item active">

              <img src="assets/images/slider/home-slider-1.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow">Because they need your help</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow ">Do not let them down</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->


            <div class="item ">

              <img src="assets/images/slider/home-slider-2.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow">Together we can improve their lives</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow"> So let's do it !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->




            <div class="item ">

              <img src="assets/images/slider/home-slider-3.jpg" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->

          </div>

          <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>

          <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

    </div><!-- /.carousel -->

    <div class="section-home about-us fadeIn animated">

        <div class="container">

            <div class="row">

                <div class="col-md-3 col-sm-6">

                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <img src="assets/images/icons/our-mission-icon.png" alt="">
                        </div>
                        <h3 class="col-title">our mission</h3>
                        <div class="col-details">

                          <p class="col-description">We put our utmost efforts into restoring a self-supporting livelihood both economically and mentally to those people who have been stricken with hardship due to conflicts and disasters.</p>

                        </div>
                        <a href="#" class="btn btn-primary"> Read more </a>

                  </div>

                </div>


                <div class="col-md-3 col-sm-6">

                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <img src="assets/images/icons/make-donation-icon.png" alt="">
                        </div>
                        <h3 class="col-title">Make donations</h3>
                        <div class="col-details">

                          <p class="col-description">Donation so we can have more funds to help more people.</p>

                        </div>
                        <a href="#" class="btn btn-primary"> Read more </a>

                  </div>

                </div>


                <div class="col-md-3 col-sm-6">

                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <img src="assets/images/icons/help-icon.png" alt="">
                        </div>
                        <h3 class="col-title">Help & support</h3>
                        <div class="col-details">

                          <p class="col-description">With a shrinking space for civil society in many parts of the world, NGOs struggle to live in a new reality that often discredits them. With Give-AID, you can give our your support.</p>

                        </div>
                        <a href="#" class="btn btn-primary"> Read more </a>

                  </div>

                </div>


                <div class="col-md-3 col-sm-6">

                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <img src="assets/images/icons/programs-icon.png" alt="">
                        </div>
                        <h3 class="col-title">our programs</h3>
                        <div class="col-details">

                          <p class="col-description">Poverty reduction programs can provide the poor with the equipment and skills to obtain food and water.</p>

                        </div>
                        <a href="#" class="btn btn-primary"> Read more </a>

                  </div>

                </div>



            </div>

        </div>

    </div> <!-- /.about-us -->

    <div class="section-home home-reasons">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <div class="reasons-col animate-onscroll fadeIn">

                        <img src="assets/images/reasons/we-fight-togother.jpg" alt="">

                        <div class="reasons-titles">

                            <h3 class="reasons-title">We fight together</h3>
                            <h5 class="reason-subtitle">We are humans</h5>

                        </div>

                        <div class="on-hover hidden-xs">

                            <p> We put our utmost efforts into restoring a self-supporting livelihood both economically and mentally to those people who have been stricken with hardship due to conflicts and disasters. We do so promptly, precisely, and flexibly by fully utilizing local human and material resources, considering this the most promising way to revitalize the society.</p>

                            <p> Furthermore, we also try to convey victims’ sufferings and their efforts to overcome such sufferings along with their hopes and desires to the rest of the world so that the value of peace is seen in a new light and is shared by people everywhere.</p>

                        </div>
                    </div>

                </div>


                <div class="col-md-6">

                    <div class="reasons-col animate-onscroll fadeIn">

                        <img src="assets/images/reasons/we-care-about.jpg" alt="">

                        <div class="reasons-titles">

                            <h3 class="reasons-title">WE care about others</h3>
                            <h5 class="reason-subtitle">We are humans</h5>

                        </div>

                        <div class="on-hover hidden-xs">

                            <p> Being a caregiver is one of the most important and personally rewarding roles a person will play in their lifetime.</p>

                            <p> Caregiving does not just have a positive impact on those who receive care, but on those who provide care as well. </p>

                            <p> From gaining a greater sense of purpose to new life skills, it’s clear that the benefits of caregiving don’t just apply to the recipient, but also those who  care. </p>

                        </div>


                    </div>

                </div>


            </div>



        </div>


    </div> <!-- /.home-reasons -->

    <div class="section-home our-causes animate-onscroll fadeIn">

        <div class="container">

            <h2 class="title-style-1">Our Causes <span class="title-under"></span></h2>

            <div class="row">

                @foreach($causes as $key => $data)

		                <div class="col-md-3 col-sm-6">

		                    <div class="cause">

		                        <img src="assets/images/causes/cause-hunger.jpg" alt="" class="cause-img">

		                        <div class="progress cause-progress">
		                          <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		                            {{$data -> total_amount}}$/{{$data -> goal}}$
		                          </div>
		                        </div>

		                        <h4 class="cause-title"><a href="{{url('causes-single')}}">{{$data -> cause_title}}</a></h4>
		                        <div class="cause-details">
		                            {{$data->description}}
		                        </div>

		                        <div class="btn-holder text-center">
		                          <a href="{{url('causes-single')}}" class="btn btn-primary" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>
		                        </div>
		                    </div> <!-- /.cause -->
		                </div>
					@endforeach



            </div>

        </div>

    </div> <!-- /.our-causes -->






    <div class="section-home our-sponsors animate-onscroll fadeIn">

        <div class="container">

            <h2 class="title-style-1">Our Sponsors <span class="title-under"></span></h2>

            <ul class="owl-carousel list-unstyled list-sponsors">

              <li> <img src="assets/images/sponsors/bus.png" alt=""></li>
              <li> <img src="assets/images/sponsors/wikimedia.png" alt=""></li>
              <li> <img src="assets/images/sponsors/one-world.png" alt=""></li>
              <li> <img src="assets/images/sponsors/wikiversity.png" alt=""></li>
              <li> <img src="assets/images/sponsors/united-nations.png" alt=""></li>

              <li> <img src="assets/images/sponsors/bus.png" alt=""></li>
              <li> <img src="assets/images/sponsors/wikimedia.png" alt=""></li>
              <li> <img src="assets/images/sponsors/one-world.png" alt=""></li>
              <li> <img src="assets/images/sponsors/wikiversity.png" alt=""></li>
              <li> <img src="assets/images/sponsors/united-nations.png" alt=""></li>

            </ul>

        </div>

    </div> <!-- /.our-sponsors -->





    <footer class="main-footer">

        <div class="footer-top">

        </div>


        <div class="footer-main">
            <div class="container">

                <div class="row">
                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">About us <span class="title-under"></span></h4>

                            <div class="footer-content">

                                <p>
                                    <strong>Give-AID</strong> was established in January 2001 to provide emergency assistance in the countries of the Africa. Since then, adhering to the concept of “psycho-social and self-reliance support,” Give-AID has been consistently in charge of offering support activities to those people who have been stricken with hardship due to conflicts and disasters across the globe, in every phase of recovery from emergency assistance to reconstruction.
                                </p>

                                <p>
{{--                                    <strong>Give-AID</strong> became a non-profit organization in 2010, opening its headquarters in Hanoi, Vietnam. Authorized by the National Tax Agency on September 2011, Give-AID offers assistance activities in Nigeria, Ghana, Senegal, Sudan Maroc, Camaroon as of October 2016.--}}
                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">LAST TWEETS <span class="title-under"></span></h4>

                            <div class="footer-content">
                                <ul class="tweets list-unstyled">
                                    <li class="tweet">

                                        20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar  http://t.co/fTSazikPd4

                                    </li>

                                    <li class="tweet">

                                        20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar  http://t.co/fTSazikPd4

                                    </li>

                                    <li class="tweet">

                                        20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar  http://t.co/fTSazikPd4

                                    </li>

                                </ul>
                            </div>

                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">Contact us <span class="title-under"></span></h4>

                            <div class="footer-content">

                                <div class="footer-form">

                                    <div class="footer-form" >

                                    <form action="php/mail.php" class="ajax-form">

                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>

                                         <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                                        </div>

                                        <div class="form-group alerts">

                                            <div class="alert alert-success" role="alert">

                                            </div>

                                            <div class="alert alert-danger" role="alert">

                                            </div>

                                        </div>

                                         <div class="form-group">
                                            <button type="submit" class="btn btn-submit pull-right">Send message</button>
                                        </div>

                                    </form>

                                </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="clearfix"></div>



                </div>


            </div>


        </div>

        <div class="footer-bottom">

            <div class="container text-right">
                Give-AID @ copyrights 2015 - by <a href="http://www.ouarmedia.com" target="_blank">Ouarmedia</a>
            </div>
        </div>

    </footer> <!-- main-footer -->




    <!-- Donate Modal -->
    <div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">

      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="donateModalLabel">DONATE NOW</h4>
          </div>
          <div class="modal-body">

                <form class="form-donation">

                        <h3 class="title-style-1 text-center">Thank you for your donation <span class="title-under"></span>  </h3>

                        <div class="row">

                            <div class="form-group col-md-12 ">
                                <input type="text" class="form-control" id="amount" placeholder="AMOUNT(€)">
                            </div>

                        </div>


                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="firstName" placeholder="First name*">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="lastName" placeholder="Last name*">
                            </div>
                        </div>


                        <div class="row">

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="email" placeholder="Email*">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="phone" placeholder="Phone">
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="address" placeholder="Address">
                            </div>

                        </div>


                        <div class="row">

                            <div class="form-group col-md-12">
                                <textarea cols="30" rows="4" class="form-control" name="note" placeholder="Additional note"></textarea>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" name="donateNow" >DONATE NOW</button>
                            </div>

                        </div>





                </form>

          </div>
        </div>
      </div>

    </div> <!-- /.modal -->





    <!--  Scripts
    ================================================== -->

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- owl carouseljavascript file -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Template main javascript -->
    <script src="assets/js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    </body>
</html>
