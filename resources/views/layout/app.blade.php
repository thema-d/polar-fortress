<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title', 'Juta Online Shoe Store')</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico" />
    <!-- all CSS hear -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/assets/css/ionicons.min.css" />
    <link rel="stylesheet" href="/assets/css/animate.css" />
    <link rel="stylesheet" href="/assets/css/nice-select.css" />
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/css/mainmenu.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/responsive.css" />
    <script src="/assets/js/modernizr-2.8.3.min.js"></script>
    @livewireStyles
  </head>
  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve
        your experience. Thanks
      </p>
    <![endif]-->
    <!-- Add your application content here -->

    <div class="wrapper login-register-page">
      <header>
        <!-- header-mid-area start -->
        <div class="header-mid-area">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-3 col md-custom-12">
                <!-- logo start -->
                <div class="logo">
                  <a href="/"
                    ><img src="/assets/img/logo.png" alt=""
                  /></a>
                </div>
                <!-- logo end -->
              </div>
              <div class="col-lg-9 md-custom-12">
                <!-- shopping-cart-box start -->
                <livewire:shopping-cart-box />
                <!-- shopping-cart-box end -->

                <!-- searchbox start -->
                <div class="searchbox">
                  <form action="#">
                    <div class="search-form-input">
                      <input
                        type="text"
                        placeholder="Enter your search key ... "
                      />
                      <button class="top-search-btn" type="submit">
                        Search
                      </button>
                    </div>
                  </form>
                </div>
                <!-- searchbox end -->
              </div>
            </div>
          </div>
        </div>
        <!-- header-mid-area end -->
        <!-- header-bottom-area start -->
        <div class="header-bottom-area bg-black sticky-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-8 d-none d-lg-block">
                <!-- main-menu-area start -->
                <div class="main-menu-area">
                  <nav>
                    <ul>
                      <li class="active"><a href="#">Home</a></li>
                    </ul>
                  </nav>
                </div>
                <!-- main-menu-area end -->
              </div>
              <div class="col-lg-4">
                <!-- social-follow-box start -->
                <div class="social-follow-box">
                  <div class="follow-title">
                    <h2>Follow us:</h2>
                  </div>
                  <ul class="social-follow-list">
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                  </ul>
                </div>
                <!-- social-follow-box end -->
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 d-block d-lg-none">
                <!-- Mobile Menu Area Start -->
                <div class="mobile-menu-area">
                  <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                      <ul>
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">My Cart</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
                <!-- Mobile Menu Area End -->
              </div>
            </div>
          </div>
        </div>
        <!-- header-bottom-area end -->
      </header>

      <!-- content-wraper start -->
      @yield('content')
      <!-- content-wraper end -->

      <!-- footer-area start -->
      <footer class="footer-area mt-65">
        <div class="footer-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4 col-md-12">
                <div class="about-us-footer">
                  <div class="footer-logo">
                    <a href="#"
                      ><img src="/assets/img/logo_footer.png" alt=""
                    /></a>
                  </div>
                  <div class="footer-info">
                    <p class="phone">+ (012) 800 456 789</p>
                    <p class="desc_footer">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur, eos.
                    </p>
                    <div class="social_follow">
                      <ul class="social-follow-list">
                        <li class="facebook">
                          <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="twitter">
                          <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="youtube">
                          <a href="#"><i class="fa fa-youtube"></i></a>
                        </li>
                        <li class="google">
                          <a href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li class="instagram">
                          <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-8 col-md-12">
                <div class="footer-info-inner">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="copyright">
                  Copyright &copy; <a href="#">Juta</a>. All Rights Reserved
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="payment">
                  <img alt="" src="/assets/img/icon/payment.png" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- footer-area end -->
    </div>

    <!-- jquery -->
    <script src="/assets/js/jquery-1.12.4.min.js"></script>
    <!-- all plugins JS hear -->
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/jquery.mainmenu.js"></script>
    <script src="/assets/js/ajax-email.js"></script>
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/notify.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- main JS -->
    <script src="/assets/js/main.js"></script>
    @livewireScripts
    <script>
      Livewire.on('item.added', function() {
        $.notify("Item added to cart successfully!", {globalPosition: "top center", className: "success"});
      });
      Livewire.on('item.removed', function() {
        $.notify("Item removed from cart!", {globalPosition: "top center", className: "error"});
      });
      Livewire.on('checkout.completed', function() {
        swal({
          title: "Congratulations!",
          text: "Your package is on its way to you !",
          icon: "success",
          button: "Done",
        });
      });
    </script>
  </body>
</html>
