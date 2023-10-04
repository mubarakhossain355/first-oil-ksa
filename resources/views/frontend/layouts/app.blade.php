<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<head>

    <meta charset="utf-8">
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="First Oil KSA">
    <meta name="keywords"
        content=" architecture, builder, building, building company, cleaning services, construction, construction business, construction company">
    <meta name="author" content="blogwp.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/frontend/style.css">

    <!-- Favicon and touch icons  -->
    <link rel="shortcut icon" href="{{ asset('/') }}assets/frontend/assets/icon/favicon.png">
    <link rel="apple-touch-icon-precomposed"
        href="{{ asset('/') }}assets/frontend/assets/icon/apple-touch-icon-158-precomposed.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
         .m {
	padding: 10px;
	font-size: 18px;
	width: 35px;
	text-align: center;
	text-decoration: none;
	margin: 3px 1px;
    border-radius: 50%;
  } 
  
  .fa:hover {
	  opacity: 0.7;
  }
  
  .fa-facebook {
	background: #3B5998;
	color: white;
  }
  
  .fa-twitter {
	background: #55ACEE;
	color: white;
  }
  
 
  
  .fa-linkedin {
	background: #007bb5;
	color: white;
  }
  
  .fa-youtube {
	background: #bb0000;
	color: white;
  }
  .fa-instagram {
  background: #125688;
  color: white;
}
  
    </style>
</head>

<body class="front-page no-sidebar site-layout-full-width menu-has-cart header-sticky header-style-5">
    <div id="top"></div>

    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">

            <div id="site-header-wrap">
                <!-- Header -->
                <header id="site-header" class="header-front-page style-5">
                    <div id="site-header-inner" class="container">
                        <div class="wrap-inner">
                            <div id="site-logo" class="clearfix">
                                <div id="site-logo-inner">
                                    <a href="{{ route('home') }}" title="Construction" rel="home" class="main-logo">
                                        <img src="{{ asset('storage/' . $settings->logo) }}"
                                            alt="{{ config('app.name', 'Laravel') }} Logo"
                                            data-retina="assets/img/logo-light@2x.png" height="80" width="80"
                                            data-width="80" data-height="30">
                                    </a>
                                </div>
                            </div><!-- /#site-logo -->

                            <div class="mobile-button"><span></span></div><!-- //mobile menu button -->

                            <nav id="main-nav" class="main-nav">
                                <ul class="menu">
                                    <li class="menu-item"><a href="{{ route('home') }}">Home</a></li>
                                    @if (count($aboutUs) > 0)
                                        <li class="menu-item menu-item-has-children"><a  href="#">
                                                About Us </a>
                                            <ul class="sub-menu">
                                                @foreach ($aboutUs as $item)
                                                    <li class="menu-item"><a 
                                                            href="{{ route('about.us', [$item->id, Str::slug($item->page_title)]) }}">{{ $item->page_title }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endif
                                   
                                    <li class="menu-item "><a href="{{route('service')}}">Services</a></li>
                                    @if (count($types) > 0)
                                    <li class="menu-item menu-item-has-children"><a  href="#">
                                            Project </a> 
                                        <ul class="sub-menu">
                                            @foreach ($types as $type)
                                                <li class="menu-item"><a  href="{{ route('project', [$type->id, Str::slug($type->name)]) }}">{{ $type->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                                    <li class="menu-item menu-item-has-children"><a href="#">Media</a>
                                        <ul class="sub-menu">
                                           
                                                <li class="menu-item"><a  href="{{ route('news') }}">News</a></li>
                                                <li class="menu-item"><a  href="{{ route('event') }}">Events</a></li>
                                                <li class="menu-item"><a  href="{{ route('blog') }}">Blog</a></li>
                                           
                                        </ul>
                                    </li>
                                    <li  class="menu-item"><a href="{{ route('career') }}">Career</a></li>
                                    <li class="menu-item"><a href="{{ route('contact.us') }}">Contact</a></li>
                                </ul>
                            </nav><!-- /#main-nav -->
                        </div>
                    </div><!-- /#site-header-inner -->
                </header><!-- /#site-header -->
            </div><!-- /#site-header-wrap -->


            <!-- Main Content -->
            <div id="main-content" class="site-main clearfix">
                @yield('content')
            </div>

            <!-- Footer -->
            <footer id="footer">
                <div id="footer-widgets" class="container style-1">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="widget widget_about margin-bottom-25">
                                <div class="margin-bottom-35">
                                    <img src="{{ asset('storage/' . $settings->logo) }}"
                                        alt="{{ config('app.name', 'Laravel') }} Logo"
                                        data-retina="assets/img/logo-light@2x.png" height="80" width="80"
                                        data-width="80" data-height="30">
                                </div>
                                <h6 class="widget-title">{{ $settings->footer_about_us_title }}</h6>
                                <p>{{ $settings->footer_about_us_description }}</p>
                                </section>

                                <section class="widget widget_information">
                                    {{-- <ul class="info-wrap">
                        <li class="address item">1 Beverly Hills, Los Angeles, California, 90210, United States</li>
                        <li class="phone item">+1 (390) 379 3368, +1 (390) 379 6868</li>
                        <li class="email item">contact@construction.com</li>
                    </ul> --}}
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="widget widget_tag_cloud">
                                <h2 class="widget-title">Latest Blogs</h2>
                                <div class="tagcloud">
                                    @foreach ($footerBlogs as $footerBlog)
                                        <a
                                            href="{{ route('blog.details', [$footerBlog->id, $footerBlog->title]) }}">{{ $footerBlog->title }}</a>
                                    @endforeach


                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="widget widget_links">
                                <h2 class="widget-title">Quick links</h2>

                                <ul class="links ">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                    <li><a href="{{ route('contact.us') }}">Career</a></li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="widget widget_about margin-bottom-25">

                                <h6 class="widget-title">CONTACT US</h6>
                                </section>

                                <section class="widget widget_information">
                                    <ul class="info-wrap">
                                        @if ($settings->company_address)
                                            <li class="address item">{{ $settings->company_address }}</li>
                                        @endif
                                        @if ($settings->mobile)
                                            <li class="phone item"><a href="">{{ $settings->mobile }}</a></li>
                                        @endif
                                        @if ($settings->mobile_1)
                                            <li class="phone item"><a href="">{{ $settings->mobile_1 }}</a></li>
                                        @endif
                                        @if ($settings->email)
                                            <li class="email item"><a
                                                    href="mailto:mail@example.com">{{ $settings->email }}</a></li>
                                        @endif
                                        @if ($settings->facebook_url)
                                            <a href="{{ $settings->facebook_url }}"  target="_blank" class="m fa fa-facebook"></a>
                                        @endif
                                        @if ($settings->twitter_url)
                                            <a href="{{ $settings->twitter_url }}"  target="_blank" class="m fa fa-twitter"></a>
                                        @endif
                                        @if ($settings->linkedin_url)
                                            <a href="{{ $settings->linkedin_url }}"  target="_blank" class="m fa fa-linkedin"></a>
                                        @endif
                                        @if ($settings->youtube_url)
                                            <a href="{{ $settings->youtube_url }}"  target="_blank" class="m fa fa-youtube"></a>
                                        @endif
                                        @if ($settings->instagram_url)
                                            <a href="{{ $settings->instagram_url }}"  target="_blank" class="m fa fa-instagram"></a>
                                        @endif
                                        
                                    </ul>
                            </div>
                        </div>

                        {{-- <div class="col-md-3">
                <div class="widget widget_instagram">
                    <h2 class="widget-title">Instagram photos</h2>

                    <div class="instagram-wrap clearfix g10">
                        <div class="instagram_badge_image">
                            <a href="#">
                                <div class="item">
                                    <img src="{{asset('/')}}assets/frontend/assets/img/instagram/1.jpg" alt="image" />
                                </div>          
                            </a>
                        </div>
                        <div class="instagram_badge_image">
                            <a href="#">
                                <div class="item">
                                    <img src="{{asset('/')}}assets/frontend/assets/img/instagram/2.jpg" alt="image" />
                                </div>          
                            </a>
                        </div>
                        <div class="instagram_badge_image">
                            <a href="#">
                                <div class="item">
                                    <img src="{{asset('/')}}assets/frontend/assets/img/instagram/3.jpg" alt="image" />
                                </div>          
                            </a>
                        </div>
                        <div class="instagram_badge_image">
                            <a href="#">
                                <div class="item">
                                    <img src="{{asset('/')}}assets/frontend/assets/img/instagram/4.jpg" alt="image" />
                                </div>          
                            </a>
                        </div>
                        <div class="instagram_badge_image">
                            <a href="#">
                                <div class="item">
                                    <img src="{{asset('/')}}assets/frontend/assets/img/instagram/5.jpg" alt="image" />
                                </div>          
                            </a>
                        </div>
                        <div class="instagram_badge_image">
                            <a href="#">
                                <div class="item">
                                    <img src="{{asset('/')}}assets/frontend/assets/img/instagram/6.jpg" alt="image" />
                                </div>          
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}

                    </div>
                </div>
            </footer>

            <!-- Bottom -->
            <div id="bottom" class="clearfix style-1">
                <div id="bottom-bar-inner" class="wprt-container">
                    <div class="bottom-bar-inner-wrap">

                        <div class="bottom-bar-content">
                            <div id="copyright">© Copyright {{ date('Y') }}. All Rights Reserved.
                            </div><!-- /#copyright -->
                        </div><!-- /.bottom-bar-content -->

                        {{-- <div class="bottom-bar-menu">
                <ul class="bottom-nav">
                    <li><a href="#/">HOME</a></li>
                    <li><a href="#/">ABOUT</a></li>
                    <li><a href="#/">SERVICES</a></li>
                    <li><a href="#/">CONTACT</a></li>
                </ul>       
            </div> --}}

                        <!-- /.bottom-bar-menu -->
                    </div>
                </div>
            </div>

        </div><!-- /#page -->
    </div><!-- /#wrapper -->

    <a id="scroll-top">TOP</a>

    <!-- Javascript -->
    <script type="text/javascript" src="{{ asset('/') }}assets/frontend/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}assets/frontend/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}assets/frontend/assets/js/animsition.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}assets/frontend/assets/js/plugins.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}assets/frontend/assets/js/countTo.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}assets/frontend/assets/js/fitText.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}assets/frontend/assets/js/flexslider.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}assets/frontend/assets/js/vegas.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}assets/frontend/assets/js/owlCarousel.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}assets/frontend/assets/js/cube.portfolio.js"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrYQFWTLnuAz2NBv9Rfezj8fmFrXOVboI"></script>
    <script type="text/javascript" src="{{ asset('/') }}assets/frontend/assets/js/main.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}assets/frontend/assets/js/gmap3.min.js"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript"
        src="{{ asset('/') }}assets/frontend/includes/rev-slider/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript"
        src="{{ asset('/') }}assets/frontend/includes/rev-slider/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}assets/frontend/assets/js/rev-slider.js"></script>
    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script type="text/javascript"
        src="{{ asset('/') }}assets/frontend/includes/rev-slider/js/extensions/revolution.extension.actions.min.js">
    </script>
    <script type="text/javascript"
        src="{{ asset('/') }}assets/frontend/includes/rev-slider/js/extensions/revolution.extension.carousel.min.js">
    </script>
    <script type="text/javascript"
        src="{{ asset('/') }}assets/frontend/includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js">
    </script>
    <script type="text/javascript"
        src="{{ asset('/') }}assets/frontend/includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js">
    </script>
    <script type="text/javascript"
        src="{{ asset('/') }}assets/frontend/includes/rev-slider/js/extensions/revolution.extension.migration.min.js">
    </script>
    <script type="text/javascript"
        src="{{ asset('/') }}assets/frontend/includes/rev-slider/js/extensions/revolution.extension.navigation.min.js">
    </script>
    <script type="text/javascript"
        src="{{ asset('/') }}assets/frontend/includes/rev-slider/js/extensions/revolution.extension.parallax.min.js">
    </script>
    <script type="text/javascript"
        src="{{ asset('/') }}assets/frontend/includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js">
    </script>
    <script type="text/javascript"
        src="{{ asset('/') }}assets/frontend/includes/rev-slider/js/extensions/revolution.extension.video.min.js">
    </script>

</body>

<!-- Mirrored from themes247.net/html5/construction/demo/home-revolution-slider-full-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 10:11:21 GMT -->

</html>
