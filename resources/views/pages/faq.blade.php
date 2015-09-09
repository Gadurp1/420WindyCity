
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
                    $api_url = 'http://data.leafly.com/strains/og-kush';
                    $app_id = '91768d00';
                    $app_key = 'fa557088ad73a02196ab929a1be0437b';

                    include(app_path().'/includes/leafly/utils.php');
                    include(app_path().'/includes/leafly/src/leafly.php');
                    Leafly_Connector::init( $app_id, $app_key );
                    $strains = new Leafly_Strains();

                    if ( isset( $_GET['strain'] ) )
                    {
                        $strain = $strains->get_strain( $_GET['strain'] );
                    }
                    $search = $strains->search( array( 'take' => 1, ) );
                    foreach ( $search->Strains as $strain )
                    {
                    ?>
                    <section class="inner-intro bg-img overlay-dark light-color parallax parallax-background2" style="background:url('http://i.huffpost.com/gen/1192715/images/o-MARIJUANA-DISPENSARY-facebook.jpg')">
                    <div >
                        <canvas id="pollyfill-canvas"></canvas>
                    </div>
                    <div class="full-cap-wraper">
                        <div class="content-caption light-color">
                            <div class="container">
                                <h1 class="h1">BD</h1>
                                <br>
                                <h1>Blue Dream</h1>
                                <img src="https://s3.amazonaws.com/enterprise-multitenant.3scale.net.3scale.net/leafly/2014/08/06/pbl-white-c112478ef31d5ce9.png?AWSAccessKeyId=AKIAIRYLTWBQ37ZNGBZA&Expires=1436411597&Signature=%2BFyUabPqlUm84aRIvxXV6%2FwPpp4%3D" alt="Powered by Leafly"><br>
                                <br>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="clearfix"></div>
        <!--About Section-->
        <section id="about" class="wow fadeIn ptb ptb-sm-80">
            <div class="container">
                <div class="row ">
                    <div class="col-md-8 col-md-offset-2">
                    <h1><?php echo $strain->Rating; ?></h1>
                    <img class="img-responsive ol-md-12" src="<?php echo $strain->StarImage; ?>">
                        <h1 class="h4">Strain Highlights</h1>
                        <div class="spacer-15"></div>
                            <div class="spacer-15"></div>


                                <hr/>

                                <h1>Medical Traits</h1>
                        <div class="spacer-15 col-md-5"></div>
                             <div class="skillbar" data-percent="55%">
                                <div class="skillbar-title">Stress</div>
                                <div class="skill-bar-percent">37</div>
                                <div class="skillbar-bar"></div>
                            </div>

                            <div class="skillbar" data-percent="80%">
                                <div class="skillbar-title">Pain</div>
                                <div class="skill-bar-percent">29</div>
                                <div class="skillbar-bar"></div>
                            </div>

                            <div class="skillbar" data-percent="40%">
                                <div class="skillbar-title">Depression</div>
                                <div class="skill-bar-percent">26.7</div>
                                <div class="skillbar-bar"></div>
                            </div>

                            <div class="skillbar" data-percent="70%">
                                <div class="skillbar-title">Insomnia</div>
                                <div class="skill-bar-percent">21.1</div>
                                <div class="skillbar-bar"></div>
                            </div>
                             <div class="skillbar" data-percent="70%">
                                <div class="skillbar-title">Headaches</div>
                                <div class="skill-bar-percent">15.6</div>
                                <div class="skillbar-bar"></div>
                            </div>
                            <a class="btn-link-a">More About</a>
                        </div>
                </div>
            </div>
            <div class="col-md-7 mb-30">

            </div>
        </div>
    </section>
     <!-- End About Section-->
                        <h3><?php echo $strain->Name; ?></h3>
                        <h4>Category: <em><?php echo $strain->Category; ?></em></h4>
                        <p><strong>Negative effects:</strong></p>
                        <ul>


 <!-- Features -->
        <section id="features" class="ptb ptb-sm-80">
            <div class="container text-center">
                <h3 class="mt-sm">Key Features</h3>
                <p class="lead">Fully Responsive & Mobile Ready</p>
                <div class="spacer-60"></div>
                <div class="row">
                    <div class="wow fadeInLeft col-md-6 pt-80 pt-sm-0">

                     
                        <div class="features-box-right">
                                                           <p>OG Kush makes up the genetic backbone of West Coast cannabis varieties, but in spite of its ubiquity, its origins remain a debatable mystery. Popular myth maintains that Chemdawg and an indica Hindu Kush parented OG Kush, passing on the distinct “kush” bud structure we see in many strains today. Other theories throw Lemon Thai genetics into the genetic mix, but no one can say for sure how this iconic strain came into existence. There are many different phenotypes of OG Kush, some of which include Tahoe OG, SFV OG, and Alpha OG. 
                                </p><p>
                                Whatever its true genetics may be, OG Kush is commonly described as sativa-like in its euphoric and happy effects that combat stress and anxiety. It has an earthy pine scent with woody undertones, an aroma that has become the signature of OG Kush varieties and descendants. With OG Kush, patients most commonly cite improvements in migraines, ADD/ADHD, and stress disorders. It has an indoor flowering time of 8 to 9 weeks with moderate yields.
                                </p>
                        </div> 
                       
                   



                    </div>
                    <div class="wow fadeIn col-md-6 hidden-sm hidden-xs text-center">
                        <img src="img/moc-3.png" />
                    </div>
                    <div class="wow fadeInRight col-md-4 pt-80 pt-sm-0">
                        <div class="features-box-left">
                            <h5>Negative Effects</h5>
                            <p>
                            <?php foreach ( $strain->NegativeEffects as $effect ) : ?>
                                <span class="label label-info"><?php echo $effect->Name; ?></span>
                            <?php endforeach; ?>
                            </p>
                        </div>      
                    </div>
                </div>
            </div>
        </section>
        <!-- End Features -->

                            <?php foreach ( $strain->Symptoms as $effect ) : ?>
                            <li><?php echo $effect->Name; ?></li>
                            <?php endforeach; ?>
                        </ul>


                    <?php
                    }
                    ?>
                    </div>

      <?php echo var_dump($search);?>
                    </body>
                    </html>


                    
                </div>

            </div>

        </section>
        <!-- End Work Detail Section -->

    <!-- End CONTENT -->

