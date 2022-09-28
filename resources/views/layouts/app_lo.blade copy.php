<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Protección de Datos</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/template/css/line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/template/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/template/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/template/css/nivo-lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('/template/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/template/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('/template/css/menu_sideslide.css') }}">
    <link rel="stylesheet" href="{{ asset('/template/css/main.css') }}">    
    <link rel="stylesheet" href="{{ asset('/template/css/responsive.css') }}">

  </head>
  <body>

    <!-- Header Section Start -->
    <header id="home" class="hero-area-2" data-stellar-background-ratio="0.5"> 
      <div class="overlay"></div>
    </header>

    <!-- Contact Section Start -->
    <section id="contact" class="section">      
      <div class="contact-form">
        <div class="container">
          <div class="section-header">          
            <h2 class="section-title">Diligenciamiento de Datos</h2>
            <span>Datos</span>
            <p class="section-subtitle">Formulario</p>
          </div>
          <div class="row">          
            <div class="col-lg-9 col-md-9 col-xs-12">
              <div class="contact-block">
                {{-- <form id="contactForm" method="post" action="{{ url('empleados') }}"> --}}
                    <form method="post" action="{{ url('empleados') }}">
                    {{ csrf_field() }}
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" placeholder="Número de Identificación" id="fdp_identificacion" name="fdp_identificacion" class="form-control" required data-error="Ingrese por favor su número de identificación">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" placeholder="Nombres" id="fdp_nombres" name="fdp_nombres" class="form-control" required data-error="Ingrese por favor sus nombres">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" placeholder="Apellidos" id="fdp_apellidos" name="fdp_apellidos" class="form-control" required data-error="Ingrese por favor sus apellidos">
                          <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" placeholder="Ciudad" id="fdp_ciudad" name="fdp_ciudad" class="form-control" required data-error="Ingrese por favor su ciudad">
                          <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Dirección" id="fdp_direccion" name="fdp_direccion" class="form-control" required data-error="Ingrese por favor su dirección">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" placeholder="Correo Electrónico" id="fdp_correo" name="fdp_correo" class="form-control" required data-error="Ingrese por favor su correo electrónico">
                          <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" placeholder="Número de Celular" id="fdp_numero_celular" name="fdp_numero_celular" class="form-control" required data-error="Ingrese por favor su número de celular">
                          <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                      {{-- <div class="form-group"> 
                        <textarea class="form-control" id="message" placeholder="Your Message" rows="7" data-error="Write your message" required></textarea>
                        <div class="help-block with-errors"></div>
                      </div> --}}
                      <div class="submit-button">
                        <button class="btn btn-common btn-effect" id="submit" type="submit">Guardar Datos</button>
                        <div id="msgSubmit" class="h3 hidden"></div> 
                        <div class="clearfix"></div> 
                      </div>
                    </div>
                  </div>            
                </form>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12">
              <div class="contact-deatils">
                <!-- Content Info -->
                <div class="contact-info_area">
                  <div class="contact-info">
                    <i class="lni-map"></i>
                    <h5>Location</h5>
                    <p>1900 Pico Blvd, New York br Centernial, colorado</p>
                  </div>
                  <!-- Content Info -->
                  <div class="contact-info">
                    <i class="lni-star"></i>
                    <h5>E-mail</h5>
                    <p>info@example.com</p>
                  </div>
                  <!-- Content Info -->
                  <div class="contact-info">
                    <i class="lni-phone"></i>
                    <h5>Phone</h5>
                    <p>+48 123 456 789</p>
                  </div>
                  <!-- Icon -->
                  <ul class="footer-social">
                    <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                    <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>           
    </section>
    <!-- Contact Section End -->
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <main class="py-4">
            @yield('content')
        </main>
    </main>

    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <h3>Essence</h3>
              <div class="textwidget">
                <p>If you think you have the passion, 
                attitude and capability to join us 
                the next big software company
                s so that we can get the convers.</p>
              </div>
              <ul class="footer-social">
                <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
              </ul> 
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Short Link</h3>
                <ul class="menu">
                  <li><a href="#">Service</a></li>
                  <li><a href="#">Wishlist</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Advance Sarch</a></li>
                  <li><a href="#">Site Map</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Contact Us</h3>
                <ul class="contact-footer">
                  <li>
                    <strong>Address :</strong> <span>1900 Pico Blvd, New York br Centernial, colorado</span>
                  </li>
                  <li>
                    <strong>Phone :</strong> <span>+48 123 456 789</span>
                  </li>
                  <li>
                    <strong>E-mail :</strong> <span><a href="#">info@example.com</a></span>
                  </li>
                </ul> 
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Instagram</h3>
                <ul class="instagram-footer">
                  <li><a href="#"><img src="{{ asset('/template/img/instagram/insta1.jpg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ asset('/template/img/instagram/insta2.jpg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ asset('/template/img/instagram/insta3.jpg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ asset('/template/img/instagram/insta4.jpg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ asset('/template/img/instagram/insta5.jpg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ asset('/template/img/instagram/insta6.jpg') }}" alt=""></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer area End -->
      
      <!-- Copyright Start  -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info float-left">
                <p>All copyrights reserved &copy; 2022 - Designed by <a href="http://uideck.com" rel="nofollow">UIdeck</a></p>
              </div>              
              <div class="float-right">  
                <ul class="nav nav-inline">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">About Prime</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">TOS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Return Policy</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End -->

    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-arrow-up"></i>
    </a>

    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>    

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{{ asset('/template/js/jquery-min.js') }}"></script>
    <script src="{{ asset('/template/js/popper.min.js') }}"></script>
    <script src="{{ asset('/template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/template/js/classie.js') }}"></script>

    <script src="{{ asset('/template/js/jquery.mixitup.js') }}"></script>
    <script src="{{ asset('/template/js/nivo-lightbox.js') }}"></script>
    <script src="{{ asset('/template/js/owl.carousel.js') }}"></script>    
    <script src="{{ asset('/template/js/jquery.stellar.min.js') }}"></script>    
    <script src="{{ asset('/template/js/jquery.nav.js') }}"></script>    
    <script src="{{ asset('/template/js/scrolling-nav.js') }}"></script>    
    <script src="{{ asset('/template/js/jquery.easing.min.js') }}"></script>     
    <script src="{{ asset('/template/js/wow.js') }}"></script>  
    <script src="{{ asset('/template/js/jquery.vide.js') }}"></script>
    <script src="{{ asset('/template/js/jquery.counterup.min.js') }}"></script>    
    <script src="{{ asset('/template/js/jquery.magnific-popup.min.js') }}"></script>    
    <script src="{{ asset('/template/js/waypoints.min.js') }}"></script>    
    <script src="{{ asset('/template/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('/template/js/contact-form-script.js') }}"></script>   
    <script src="{{ asset('/template/js/main.js') }}"></script>
    <script src="{{ asset('/template/js/map.js') }}"></script>
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
      
    
  </body>
</html>