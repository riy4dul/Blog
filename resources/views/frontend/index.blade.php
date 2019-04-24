<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Specific Meta
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
        <meta name="description" content="glimmer is a modern presentation HTML5 Blog template.">
        <meta name="keywords" content="HTML5, Template, Design, Development, Blog" />
        <meta name="author" content="">

        <!-- Titles
        ================================================== -->
        <title>Event Factory</title>
        
        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="{{asset('')}}frontend/images/favicon.png">
        <link rel="apple-touch-icon" href="{{asset('')}}frontend/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('')}}frontend/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('')}}frontend/images/apple-touch-icon-114x114.png">

        <!-- Custom Font
        ================================================== -->
        <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic%7CLato:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{asset('')}}frontend/fonts/font-awsome/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('')}}frontend/fonts/glimmer/glimmer-shape.css">

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="{{asset('')}}frontend/lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('')}}frontend/lib/magnific-popup/magnific-popup.css">
        <link rel="stylesheet" href="{{asset('')}}frontend/lib/justifiedgallery/justifiedGallery.min.css">
        <link rel="stylesheet" href="{{asset('')}}frontend/css/owl.carousel.css">
        <link rel="stylesheet" href="{{asset('')}}frontend/css/style.css">
        <link rel="stylesheet" href="{{asset('')}}frontend/colors/color-schemer.css">

        <!-- Modernizr
        ================================================== -->
        <script src="{{asset('')}}frontend/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!-- Header
        ================================================== -->
        <header id="masthead" class="site-header">
           <!-- Header Top Part -->
            {{--<div id="header-top">--}}
                {{--<div class="container">--}}
                    {{--<div class="row">--}}
                        {{--<div class="header-search">--}}
                            {{--<div class="search default">--}}
                                {{--<form method="get" action="#" class="searchform">--}}
                                    {{--<div class="input-group">--}}
                                        {{--<input type="search" value="Search..." class="form-control" name="s" id="dsearch">--}}
                                        {{--<span class="input-group-btn">--}}
                                            {{--<button id="submit-btn" type="button" class="btn btn-default"><i class="fa fa-search"></i></button>--}}
                                        {{--</span>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                            {{--</div> <!-- /.search -->--}}
                        {{--</div> <!-- /.header-search -->--}}

                        {{--<div class="header-social">--}}
                            {{--<a target="_blank" href="#"><i class="fa fa-facebook"></i></a>--}}
                            {{--<a target="_blank" href="#"><i class="fa fa-twitter"></i></a>    --}}
                            {{--<a target="_blank" href="#"><i class="fa fa-behance"></i></a>    --}}
                            {{--<a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>--}}
                            {{--<a target="_blank" href="#"><i class="fa fa-pinterest-p"></i></a>--}}
                            {{--<a target="_blank" href="#"><span class="fa fa-instagram"></span></a>--}}
                            {{--<a target="_blank" href="#"><span class="fa fa-dribbble"></span></a>--}}
                        {{--</div> <!-- /.top-social --> --}}
                    {{--</div> <!-- /.row -->--}}
                {{--</div> <!-- /.container -->--}}
            {{--</div>--}}
            <!-- /#header-top -->
            
            <!-- Header Middle Part-->
            <div id="header-middle">
                <div class="container">
                    <div class="row">
                        <!-- Navigation Left -->
                        <nav id="nav-left" class="site-navigation top-navigation">
                            <div class="menu-wrapper">
                                <div class="menu-content">
                                    {{--<ul class="menu-list">--}}
                                        {{--<li><a href="index02.html" class="active">Home</a></li>--}}
                                        {{--<li><a href="#">Features</a></li>--}}
                                        {{--<li><a href="#">Post Format</a></li>--}}
                                        {{--<li><a href="category-one.html">Travel</a></li>   --}}
                                    {{--</ul>--}}
                                </div>
                            </div> <!-- /.menu-wrapper -->
                        </nav>
                        <!-- /#nav-left -->

                        <!-- Site Logo -->
                        <div id="site-logo">
                            <a href="index02.html" class="site-logo">
                                <img alt="logo" src="{{asset('')}}frontend/images/event_logo.png">
                            </a> 
                        </div> <!-- /#site-logo -->

                        <!-- Navigation Right -->
                        <nav id="nav-right" class="site-navigation top-navigation menu-right">
                            <div class="menu-wrapper">
                                <div class="menu-content">
                                    {{--<ul class="menu-list">--}}
                                        {{--<li><a href="category-one.html">Lifestyle</a></li>--}}
                                        {{--<li><a href="#">Music</a></li>--}}
                                        {{--<li><a href="about.html">About Me</a></li>--}}
                                        {{--<li><a href="#">Contact Us</a></li>--}}
                                    {{--</ul>--}}
                                </div>
                            </div> <!-- /.menu-wrapper -->
                        </nav>
                        <!-- /#nav-right -->
                    </div> <!-- /.row -->
                </div> <!-- /.container --> 
            </div> <!-- /#header-middle -->

            <!-- Mobile Menu -->
            <div class="menucontent overlapblackbg"></div>
            <div class="menuexpandermain slideRight">
                <a id="navToggle" class="animated-arrow slideLeft"><span></span></a>
                <span id="menu-marker">Menu</span>
            </div>

            <div id="mobile-menu">
                <nav class="top-menu slideLeft clearfix">
                    <div class="menu-wrapper">
                        <div class="container">
                            <div class="row" id="mobile-menu-wrap"></div>
                        </div>               
                    </div> <!-- /.menu-wrapper -->
                </nav> <!-- /.menu  -->
            </div> <!-- /.#mobile menu -->
        </header> <!-- /.site-header -->



        <!-- Main Content
        ================================================== -->
        <!-- Content
        ================================================== -->
        <div id="content" class="site-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">            
                        <div class="row">
                            <div class="col-md-12" id="blog-content" style="margin-top: -6%;">
                                <!-- Content Area -->
                                <div id="primary" class="content-area">
                                    <main id="main" class="site-main">
                                        <div class="row">
                                            <!-- Full Post -->
                                            
                                            <!-- Grid Post -->
                                            <div class="col-md-12 mt-4">
                                                <div class="row" id="masonry-layout">

                                                    @foreach($posts as $key=>$post)

                                                    <div class="col-md-6 col-sm-6 grid">
                                                        <article class="post hentry">
                                                            <figure class="post-thumb">
                                                                <a href="#"><img src="{{asset('backend/img/post/'.$post->image)}}" class="img-responsive" alt="grid two"></a>
                                                            </figure> <!-- /.post-thumb -->
                                                            <header class="entry-header">
                                                                <div class="post-format">
                                                                    <i class="fa fa-image"></i>
                                                                </div>

                                                                <h2 class="entry-title"><a href="" rel="bookmark">{{$post->title}}</a></h2>
                                                                <div class="entry-meta">
                                                                    <span class="cat-links">
                                                                        <a rel="category tag" href="#">{{$post->name}}</a>
                                                                    </span>
                                                                    <span class="devider">/</span>
                                                                    <span class="entry-date">{{$post->created_at->format('d M Y')}}</span>
                                                                    <span class="devider">/</span>
                                                                    <span class="byline">
                                                                        <span class="author vcard">
                                                                            By: <a rel="author" href="#">Riyadul</a>
                                                                        </span>
                                                                    </span>
                                                                </div> <!-- .entry-meta -->
                                                            </header> <!-- /.entry-header -->

                                                            <div class="entry-content">
                                                                <span class="screen-reader-text"></span>
                                                                <p>{{$post->description}}</p>
                                                            </div> <!-- .entry-content -->

                                                            <footer class="entry-footer clearfix">    
                                                                <div class="more-wraper">
                                                                    <a href="#" class="more-link">Continue</a>    
                                                                </div>                
                                                                <div class="footer-meta">  
                                                                    <div class="share-area">
                                                                        <div> 
                                                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                                                            <a href="#"><span class="fa fa-facebook"></span></a>
                                                                            <a href="#"><span class="fa fa-google-plus"></span></a>
                                                                            <a href="#"><span class="fa fa-instagram"></span></a>
                                                                            <a href="#"><span class="fa fa-dribbble"></span></a>
                                                                        </div>
                                                                    </div> <!-- /.share-area -->
                                                                </div> <!-- /.footer-meta -->
                                                            </footer> <!-- .entry-footer -->
                                                        </article> <!-- /.post --> 
                                                    </div> <!-- /.Grid -->

                                                     @endforeach

                                                </div> <!-- /.row -->       
                                            </div> <!-- /.col-md-12 -->

                                            <div class="col-md-12 col-sm-12 full-width"></div>
                                        </div> <!-- /.row -->
                                    </main> <!-- #main -->

                                    <!-- pagination -->
                                    {{--<nav class="navigation paging-navigation">--}}
                                        {{--<ul class="nav-links">--}}
                                            {{--<li class="nav-previous"> <!-- disabled add when no pagination -->--}}
                                                {{--<a href="#"><span class="fa fa-angle-double-left"></span>Previous</a>--}}
                                            {{--</li>                                       --}}
                                            {{--<li class="active">--}}
                                                {{--<a><span class="page-numbers current">1</span></a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="#" class="page-numbers">2</a></li>--}}
                                            {{--<li><a href="#" class="page-numbers">3</a></li>--}}
                                            {{--<li><a href="#" class="page-numbers">4</a></li>--}}
                                            {{--<li><span class="page-numbers dots">…</span></li>--}}
                                            {{--<li><a href="#" class="page-numbers">14</a></li>   --}}
                                            {{--<li class="nav-next">--}}
                                                {{--<a href="#">Next<span class="fa fa-angle-double-right"></span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</nav> --}}
                                    <!-- /.navigation -->
                                </div> <!-- #primary -->
                            </div> <!-- /.col-md-8 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.col-md-10 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div><!-- #content --> 

        <!-- Footer
        ================================================== --> 
        <footer id="colophon" class="site-footer">
            <div id="footer-top">
                <div class="container">              
                    <div class="widget clearfix">
                        <div class="widget-title-area">
                            <h5 class="widget-title"><span>We Are Event Factory</span></h5> <!-- /.widget-title -->
                        </div> <!-- /.widget-title-area -->
                        <div id="instafeed"></div> <!-- /.instafeed-content -->
                    </div> <!-- /.glimmer_about_widget -->          
                </div>
            </div> <!-- #footer-top" -->



            <div id="footer-bottom">
                <div class="container">
                    <div class="copyright">
                        <p>Copyright&copy; 2019 EventFactory. All right reserved.</p>
                    </div> <!-- /.copyright -->
                </div> <!-- /.container -->
            </div> <!-- /#footer-bottom -->

        </footer><!-- #colophon -->

        <!-- All The JS Files
        ================================================== --> 
        <script src="{{asset('')}}frontend/js/vendor/jquery-1.11.3.min.js"></script> <!-- jQuery -->
        <script src="{{asset('')}}frontend/js/vendor/jquery-migrate.min.js"></script> <!-- jQuery-migrate -->
        <script src="{{asset('')}}frontend/lib/bootstrap/js/bootstrap.min.js"></script> <!-- Bootstrap -->
        <script src="{{asset('')}}frontend/js/owl.carousel.min.js"></script> <!-- Owl-carousel -->
        <script src="{{asset('')}}frontend/lib/magnific-popup/jquery.magnific-popup.min.js"></script> <!-- Magnific-popup JS -->
        <script src="{{asset('')}}frontend/lib/justifiedgallery/jquery.justifiedGallery.min.js"></script> <!-- Justified gallery JS -->
        <script src="{{asset('')}}frontend/js/plugins.js"></script> <!-- Plugins JS -->
        <script src="{{asset('')}}frontend/js/masonry.pkgd.js"></script> <!-- masonry JS -->
        <script src="{{asset('')}}frontend/js/glimmer.js"></script> <!-- glimmer script -->
	</body>
</html>