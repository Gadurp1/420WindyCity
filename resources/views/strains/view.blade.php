<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="" type="image/x-icon">  

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



<body class="full-intro background--dark">

    @include('layouts/sximone/topbar')


 <!-- CONTENT -->

        <!-- Intro Section -->
  <script>
  $(function() {
    var availableTags = [
"addadhd","alzheimers","anorexia","anxiety","arthritis","asthma","bipolardisorder","cachexia","cancer","crohnsdisease","epilepsy","fibromyalgia","gastrointestinaldisorder","glaucoma","hivaids","hypertension","migraines","multiplesclerosis","musculardystrophy","parkinsons","phantomlimbpain","pms","ptsd","spinalcordinjury","tinnitus","tourettessyndrome "
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });
  </script>


                    <?php

                    $api_url = 'http://data.leafly.com/strains/';
                    $app_id = 'ccb0ba11';
                    $app_key = 'b7165ad5ce9797420c95bcc009f99298';

                    include(app_path().'/includes/leafly/utils.php');
                    include(app_path().'/includes/leafly/src/leafly.php');

                    Leafly_Connector::init( $app_id, $app_key );

                    $strains = new Leafly_Strains();

                    $search = $strains->search( array( 'take' => 15, 'page' => 0, 'conditons'=>'PTSD' ) );


                    if ( isset( $slug ) )
                    {
                        $strain = $strains->get_strain( $slug );
                    }


                    ?>



        <!-- CONTENT -->

        <!-- Intro Section -->
        <section class="inner-intro bg-img overlay-dark light-color parallax parallax-background2" style="background:url('<?php echo $strain->photos[0]->fullsize;?>')">
             <div class="container">
                <div class="row title">
                    <h1><?php echo $strain->name; ?></h1>

                        <form class="contact-form" id="contact" role="form">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="col-md-12">
                              
                                    <div class="row">
                                        <div class="col-md-4">  
                                        </div>

                                        <div class="col-md-4">  
                                        <img class="img-responsive col-md-12" src="<?php echo $strain->starImage; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </form>


                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->

          
        <div class="container">

        <section id="about" class="wow fadeIn pt pb ">
            <div class="col-md-8 col-md-offset-2">                        
                <h1 class="h4">Strain Highlights</h1>
                <p><?php echo $strain->description; ?></p>
                <div class="row pt pb ">
                    <div class="wow fadeInLeft col-md-12 ">
                        <div id="barchart_material" style="width:100%"></div>
                    </div>
                </div>
                <div class="row  pb ">
                    <div class="wow fadeInLeft col-md-12 ">
                        <div id="barchart_material2" style="width:100%"></div>
                    </div>
                </div>
                            <h1 class="h4 text-center">Pros Vs. Cons</h1>
            <div class="col-md-6">
            <?php foreach($strain->{'effects'} as $effects)
                {
                    
                    echo '<div class="alert alert-success">'.$effects->name.'</div>';

                }
            ?>
            </div>
            <div class="col-md-6">
                    <div class="alert alert-danger text-center">Dizzy</div>
                    <div class="alert alert-danger text-center">Sleepy</div>
                    <div class="alert alert-danger text-center">Dry Mouth</div>
                    <div class="alert alert-danger text-center">Anxious</div>
                    <div class="alert alert-danger text-center">Paranoid</div>

         
            </div>
            </div>



        </section>

  <!-- Related Product Slider-->
        <section class="col-md-8 col-md-offset-2 pt">
                <h1 class="text-center">Related Strains</h1>
                    <div class="spacer-30"></div>
                        <div class="row">
                            <div class="owl-carousel item4-carousel nf-carousel-theme o-flow-hidden">

                            <?php foreach($search->Strains as $related){


                                        echo ' 

                                        <div class="col-md-12 nf-item">
                                            <div class="blog-post">
                                                <div class="post-header">
                                                </div>
                                                <div class="post-media">
                                                    <img class="item-container"  alt="'.$related->Name.'" src="'.$related->StarImage.'" class="col-md-12 img-responsive" alt="1" />
                                                </div>
                                                <h4><a href="'.$related->UrlName.'">'.$related->Name.'</a></h4>
                                                <div class="post-meta"><span>by <a href="'.$related->UrlName.'">Jake Ellison</a>,</span> <span>July 9, 2015</span></div>
                                                <div class="post-more-link"><a href="'.$related->UrlName.'">Read More</a></div>
                                            </div>
                                        </div>';
                                    }
                            ?>
                    
                            </div>
                        </div>     
                    </div>
                </div>
            </section>
        <!-- End Related Product Slider -->

        <section class="col-md-8 col-md-offset-2 pt">
                <h1 class="text-center">News About <?php echo $slug;?></h1>
                    <div class="spacer-30"></div>
                        <div class="row">

                    <!-- Begin Strain Reviews-->
                        <?php foreach($strain->{'articles'} as $review)

                            {

  
                            echo'
                                <div class="blog-post pb">
                                    <div class="post-media col-md-4 ">
                                        <img class="item-container" src="'.$review->thumbnail.'" alt="1" />
                                    </div>
                                    <div class="col-md-8 ">
                                        <div class="post-meta"><span>by <a>'.$review->author.'</a>,</span></div>
                                            <div class="post-header">
                                                <h4>'.$review->title.'</a></h4>
                                            </div>
                                        <div class="post-body">'.$review->text.'</div>
                                        <div class="post-tag pull-left"><span><a>Branding</a>,</span><span><a>Design</a></span></div>
                                        <div class="post-more-link pull-right"><a href="blog-single.php">Read More<i class="fa fa-long-arrow-right right"></i></a>
                                        </div>
                                        </div>
                                </div>';
                                
                                }
                                ?>
                    </section>


                </div>
            </section>
     <!-- End About Section-->

    <!-- End CONTENT -->



                    </body>
                    </html>


                    
                </div>

            </div>

        </section>
        <!-- End Work Detail Section -->
      
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

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.load("visualization", "1.1", {packages:["bar"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['', 'Symptoms'],
            <?php 
                foreach($strain->{'symptoms'} as $symptoms){

                    echo"['".$symptoms->name."','".$symptoms->score."'],";

                }
            ?>

        ]);

        var options = {
          chart: {}

        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, options);
      }
</script>
    <script type="text/javascript">
        google.load("visualization", "1.1", {packages:["bar"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['', 'Conditions'],
            <?php 
                foreach($strain->{'conditions'} as $conditions){

                    echo"['".$conditions->name."','".$conditions->score."'],";

                }
            ?>

        ]);

var options = {
      title: 'Company Performance',
      hAxis: {title: 'Year', titleTextStyle: {color: 'red'}},
      colors: ['red','green'],
      is3D:true
};

        var chart = new google.charts.Bar(document.getElementById('barchart_material2'));

        chart.draw(data, options);
      }
</script>                                       
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
