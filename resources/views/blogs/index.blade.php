<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">

    <!-- CSS -->
    <link href="{{ asset('sximo/themes/420/css/normalize.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('sximo/themes/420/css/navigation.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('sximo/themes/420/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('sximo/themes/420/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('sximo/themes/420/css/ionicons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('sximo/themes/420/css/plugin/jPushMenu.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('sximo/themes/420/css/plugin/animate.css') }}" rel="stylesheet" type="text/css" />


<!-- Anthony Search Bar-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link href="{{ asset('sximo/themes/420/css/style-420.css') }}" rel="stylesheet" type="text/css" />

    <style>
@font-face {
    font-family: 'modern_sansregular';
    src: url('{{ asset("sximo/themes/420/fonts/moderne_sans-webfont.eot") }}');
    src: url('{{ asset("sximo/themes/420/fonts/moderne_sans-webfont.eot?#iefix") }}') format('embedded-opentype'),
         url('{{ asset("sximo/themes/420/fonts/moderne_sans-webfont.woff2") }}') format('woff2'),
         url('{{ asset("sximo/themes/420/fonts/moderne_sans-webfont.woff") }}') format('woff'),
         url('{{ asset("sximo/themes/420/fonts/moderne_sans-webfont.ttf") }}') format('truetype'),
         url('{{ asset("sximo/themes/420/fonts/moderne_sans-webfont.svg#modern_sansregular") }}') format('svg');
    font-weight: normal;
    font-style: normal;
}
    </style>
    </head>




    
    </head>

<body class="full-intro background--dark">
@include('layouts/sximone/topbar')
<div style="min-height:400px;">

 <!-- CONTENT -->

        <!-- Intro Section -->
        <section class="inner-intro bg-img overlay-dark light-color parallax parallax-background2" style="background-image: url('https://cbssacramento.files.wordpress.com/2012/10/medical-marijuana-149251758.jpg');">
            <div class="container">
                <div class="row title">
                    <h1>Blog</h1>
                    <div class="page-breadcrumb">
                        <a>Home</a>/<a>Blog</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->

        <!-- Blog Post Section -->
        <section class="">
            <div class="container">
                <div class="row">
                    <!-- Post Item -->
                    <div class="col-lg-8 col-md-8">
                        <div class="row">

                            <div class="col-md-12 blog-post-hr">


							<div style="min-height:400px;"> 

					            @if(count($blogPosts))
					              @foreach($blogPosts as $panels)
					            
                           <div class="blog-post mb-2">
                                    <div class="post-media col-md-4 pull-left">
                                        <a href="420-Windy-City-Medical-Marijuana-Blog/{{$panels->slug}}">
                                            <img class="item-container" src="{{$panels->image}}" alt="1" />
                                        </a>
                                    </div>
                                    <div class="col-md-8 ">
                                    <div class="post-meta">
                                        <span>
                                           by<a></a>,
                                        </span> 
                                        <span>{{$panels->created}}</span>
                                    </div>
                                    <div class="post-header">
                                        <h3><a href="420-Windy-City-Medical-Marijuana-Blog/{{$panels->slug}}">{{$panels->title}}</a></h3>
                                    </div>

                                    <div class="post-tag pull-left">{{$panels->tags}}</div>
                                    <div class="post-more-link pull-right"><a href="420-Windy-City-Medical-Marijuana-Blog/{{$panels->slug}}">Read More<i class="fa fa-long-arrow-right right"></i></a></div>
                                </div>

                             </div>

                                <hr />
					              @endforeach
					            @else <p>No Posts Returned</p>
					          @endif



                               
</div>
 

                               

                            </div>

                        </div>

                        <!-- Pagination Nav -->
                        <div class="pagination-nav text-left mt-2 mtb-xs-1">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Pagination Nav -->

                    </div>
                    <!-- End Post Item -->

                    <!-- Sidebar -->
                    <div class="col-lg-3 col-md-3 mt-sm-1">

                       @include('blogs.sidebar')

                    </div>
                    <!-- End Sidebar -->
                </div>
            </div>
        </section>
        <!-- End Blog Post Section -->

        <!-- Post Next Prev Bar -->
        <section class="mb-2">
            <div class="container">
                <div class="item-nav">
                    <a href="" class="item-prev">
                        <div class="prev-btn"><i class="fa fa-angle-left"></i></div>
                        <div class="item-prev-text xs-hidden">
                            <h6>Prev Post</h6>
                        </div>
                    </a>

                    <a class="item-all-view">
                        <h6>Blog Page</h6>
                    </a>

                    <a href="" class="item-next">
                        <div class="next-btn"><i class="fa fa-angle-right"></i></div>
                        <div class="item-next-text xs-hidden">
                            <h6>Next Post</h6>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- End Post Next Prev Bar -->
                </div>
            </div>
        </section>
        <!-- End Blog Post Section -->

        <!-- End CONTENT -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js')}}"></script>
    
<script>
    jQuery(document).ready(function() {

        window.prettyPrint && prettyPrint();
    });
</script>   
</body> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js')}}"></script>
    
<script>
    jQuery(document).ready(function() {

        window.prettyPrint && prettyPrint();
    });
</script>   
</body> 
  <script src="{{ asset('sximo/themes/420/js/jquery-1.11.2.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jquery.easing.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jquery.flexslider.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/background-check.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jquery.fitvids.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jquery.viewportchecker.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jquery.stellar.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/wow.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jquery.colorbox-min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/owl.carousel.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/isotope.pkgd.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/masonry.pkgd.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jPushMenu.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jquery.fs.tipper.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/mediaelement-and-player.min.js')}}"></script>
    <script src="{{ asset('sximo/themes/420/js/theme.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/navigation.js')}}" type="text/javascript"></script>
    <script src="//use.typekit.net/jqj6cmj.js')}}"></script>
    <script>try{Typekit.load();}catch(e){}</script>
</html>


<script type="text/javascript">
    (function() {
        var path = '//easy.myfonts.net/v2/js?sid=263498(font-family=Boucherie+Sans)&sid=263503(font-family=Boucherie+Cursive)&sid=263508(font-family=Boucherie+Cursive+Bold)&key=NQdrvX5hL5',
            protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
            trial = document.createElement('script');
        trial.type = 'text/javascript';
        trial.async = true;
        trial.src = protocol + path;
        var head = document.getElementsByTagName("head")[0];
        head.appendChild(trial);
    })();
</script>