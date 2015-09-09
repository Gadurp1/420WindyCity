<style>
.item-inner{margin:20%;}

</style>

        <section class="home-slider dark-bg" style="background: url('http://s3.amazonaws.com/rapgenius/1363080672_smoke-weed-everyday-2_large.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">

            <!-- Hero Slider Section -->
            <div class="owl-carousel fullwidth-slider white o-flow-hidden"style="background: url(http://s3.amazonaws.com/rapgenius/1363080672_smoke-weed-everyday-2_large.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
                <div class="item bg-img parallax parallax-section1" >
            <!-- Content -->
            <div class="full-cap-wraper overlay-dark80 light-color">
                <div class="content-caption light-color parallax parallax-opacity">
                    <div class="container">
                        <img src="{{ asset('sximo/themes/420/img/logo-vertical-white.png') }}" height="400px">
                    </div>
                </div>
            </div>
            <!-- End Content -->
                </div>

        <div class="item bg-img parallax parallax-section1">
            <!-- Content -->



            <div class="full-cap-wraper overlay-dark80 light-color">
                <div class="content-caption light-color parallax parallax-opacity">
                    <div class="container">
                        <h1 class="mtb-0">Recent News</h1>
                        <div class="row">
                            <h3 class="col-md-10 col-md-offset-1">Stay Up To Date On Weedy Events</h3>
                        </div>
                        <div class="btn-group">
                        <a href="news.php" class="btn btn-md btn-main">View News</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content -->
                </div>
                <div class="item bg-img parallax parallax-section1">
            <!-- Content -->
            <div class="full-cap-wraper overlay-dark80 light-color">
                <div class="content-caption light-color parallax parallax-opacity">
                    <div class="container">
                        <h1 class="mtb-0">Shop</h1>
                        <div class="row">
                            <h3 class="col-md-10 col-md-offset-1">Check out some of our dope gear at our shop</h3>
                        </div>
                        <div class="btn-group">
                        <a href="shop.php" class="btn btn-md btn-main">Shop</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content -->

<!-- Intro Scroll Down >
            <div class="intro-scroll-down">
                <a class="scroll-down" href="#about">
                    <span class="mouse">
                        <span class="mouse-dot"></span>
                    </span>
                </a>
            </div>
< End Intro Scroll Down -->

        </section>
        <div class="clearfix"></div>

<!-- End Intro Section -->



        <!-- Select 3 Most Recent Blog Posts and Display  -->
        <section class="">
            <div class="container">
                <h1 class="text-center">Recent Blog Posts</h1>
                    <div class="spacer-30"></div>
                        <div class="row">
                            <div class="owl-carousel item4-carousel nf-carousel-theme o-flow-hidden">
    
                            <?php 

                                $employee = DB::table('tb_blogs')->get();
                                    foreach($employee as $row ) {
                                        echo ' 

                                        <div class="col-md-12 nf-item">
                                            <div class="blog-post">
                                                <div class="post-header">
                                                </div>
                                                <div class="post-media">
                                                    <img class="item-container" style="height:225px;" alt="'.$row->title.'" src="';?>{{ asset('uploads/images/'.$row->image)}}<?php echo'" class="col-md-12 img-responsive" alt="1" />
                                                </div>
                                                <h4><a href="blog/read/'.$row->slug.'">'.$row->title.'</a></h4>
                                                <div class="post-meta"><span>by <a href="blog/read/'.$row->slug.'">Jake Ellison</a>,</span> <span>July 9, 2015</span></div>
                                                <div class="post-more-link"><a href="blog/read/'.$row->slug.'">Read More</a></div>
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

 
        <!-- Strain Finder Section -->
        <section class="dark-bg text-center strain-finder" id="condition" style="  background: url(http://marijuanarates.com/wp-content/uploads/2015/06/OG-Kush-5.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
            <div class="overlay">
                <div class="container">
                <h2>What's your condition?</h2>
                    <h4 class="obj-padding">Enter your medical condition below to find the strain that's right for you.</h4>
                    <form class="contact-form" role="form">
                        <div class="row">
                            <div class="col-sm-2 "></div>
                            <div class="col-sm-8 ">
                                <div class="ui-widget">                               
                                    <div class="col-sm-2"></div>
                                    <input class="col-sm-12 ghost-white" id="tags">
                                </div>
                                <a href="" class="btn btn-md btn-main float none-xs">Search</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Strain Finder Section -->



       <!-- Licensing Section -->
        <section>
            <div class="container">
                <h2 class="text-center">Getting Illionis Medical Marijuana Card</h2>
                <div class="row">

                    <div class="col-sm-4 col-xs-12">
                        <div class="blog-post">
                            <div class="post-media">
                                <img class="item-container" src="{{ asset('sximo/themes/420/img/img/age-req.jpg') }}" alt="Age Requirement" />
                            </div>
                            <div class="post-header">
                                <h4>Age Requirements</h4>
                            </div>
                            <div class="post-body">
                                <p>The application for qualifying patients under 18 years of age is not available at this time.</p>
                            </div>
                            <div class="post-more-link"><a href="">Learn More</a></div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-12">
                        <div class="blog-post">
                            <div class="post-media">
                                <img class="item-container" src="{{ asset('sximo/themes/420/img/img/legal-guide.jpg') }}" alt="Legal Guidence" />
                            </div>
                            <div class="post-header">
                                <h4>Legal Guidence</h4>
                            </div>
                            <div class="post-body">  
                                <p>The Illinois Department of Public Health Division of Medical Cannabis cannot provide legal advice. A qualifying patient or registered cardholder should consult with a private attorney.</p>
                            </div>
                            <div class="post-more-link"><a href="legal-illinois_law.php">Learn More</a></div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 col-xs-12">
                        <div class="blog-post">
                            <div class="post-media">                    
                                <img class="item-container" src="{{ asset('sximo/themes/420/img/img/medical-cond.jpg') }}" alt="Medical Condition" />
                            </div>
                            <div class="post-header">
                                <h4>Designated Caregiver</h4>
                            </div>
                            <div class="post-body">
                                <p>A designated caregiver is a person who is selected by a qualifying patient as the person authorized to dispense and assist in the administration of medical cannabis.</p>
                            </div>
                            <div class="post-more-link"><a href="legal-illinois_law.php">Learn More</a></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Licensing Section -->





                          <!-- Related Product Slider-->
        <section class="">
            <div class="container">
                <h1 class="text-center">Shop 420 Windy City</h1>
                    <div class="spacer-30"></div>
                        <div class="row">
                            <div class="owl-carousel item4-carousel nf-carousel-theme o-flow-hidden">

                            <?php 

                                $employee = DB::table('bsc_products')->get();
                                    foreach($employee as $row ) {
                                        echo ' 

                                        <div class="col-md-12 nf-item">
                                            <div class="blog-post">
                                                <div class="post-header">
                                                </div>
                                                <div class="post-media">
                                                    <img class="item-container" style="height:225px;" alt="'.$row->name.'" src="'.$row->img_detail1.'" class="col-md-12 img-responsive" alt="1" />
                                                </div>
                                                <h4><a href="blog/read/'.$row->download.'">'.$row->name.'</a></h4>
                                                <div class="post-meta"><span>by <a href="blog/read/'.$row->download.'">Jake Ellison</a>,</span> <span>July 9, 2015</span></div>
                                                <div class="post-more-link"><a href="blog/read/'.$row->download.'">Read More</a></div>
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

<!-- End Content -->



        <!-- Scroll Top -->
        <a class="scroll-top">
            <i class="fa fa-angle-double-up"></i>
        </a>
        <!-- End Scroll Top -->

    </div>
    <!-- Site Wraper End -->
