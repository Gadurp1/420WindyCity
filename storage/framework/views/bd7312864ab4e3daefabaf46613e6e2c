
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

        <!-- CONTENT -->

        <!-- Intro Section -->
        <section class="inner-intro bg-img overlay-dark light-color parallax parallax-background2" style="background:url('http://i.huffpost.com/gen/1192715/images/o-MARIJUANA-DISPENSARY-facebook.jpg')">
             <div class="container">
                <div class="row title">
                    <h1>What's Your Condintion?</h1>

                        <form class="contact-form" id="contact" role="form">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="col-md-12">
                                    <div class="row>">
                                        <div class="ui-widget">                               
                                    <input class="col-sm-12 ghost-white" id="tags">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">  
                                            <button href="" class="btn btn-md btn-success form-full">Search</button>                          
                                        </div>

                                        <div class="col-md-6">  
                                            <!-- Single button -->
                                            <div class="btn-group col-md-12">
                                              <button type="button" class=" btn btn-md btn-primary form-full dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Filters <span class="caret"></span>
                                              </button>
                                              <ul class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                              </ul>
                                            </div>
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

        <!-- Work Detail Section -->
        <section class="ptb-3" style="overflow:hidden">
            <div class="container">
                <!-- work Filter -->
                <div class="row">                    


                   
                </div>
                <!-- End work Filter -->
                <div class="container-grid nf-col-5 ">
                    <!doctype html>
                    <head>
                        <title>Leafly Test</title>
                        <style type="text/css">
                        body{ font: 14px helvetica,sans-serif; color: #433; }
                        </style>
                    </head>
                    <body>


                    <?php


                    $api_url = 'http://data.leafly.com/strains/';
                    $app_id = 'ccb0ba11';
                    $app_key = 'b7165ad5ce9797420c95bcc009f99298';

                    include(app_path().'/includes/leafly/utils.php');
                    include(app_path().'/includes/leafly/src/leafly.php');

                    Leafly_Connector::init( $app_id, $app_key );

                    $strains = new Leafly_Strains();

                    if ( isset( $_GET['strain'] ) )
                    {
                        $strain = $strains->get_strain( '' );
                    }

                    if ( isset( $_GET['symptom'] ) )
                    {

                        $symptoms = $_GET['symptom'];

                    }
                    else{


                        $symptoms='';
                     }





                    $search = $strains->search( array( 'take' => 20, 'page' => 0, 'Condition' => 'PTSD' ) );





                    foreach ( $search->Strains as $strain )
                    {
                    ?>


                    <div class="container">
                    <div class="nf-item 


                            <?php echo $strain->Category; ?>

                            spacing

                <?php if ($strain->Category=='hybrid')

                {
                    echo 'bg-blue ';
                }
                elseif($strain->Category=='indica')
                {
                    echo 'bg-red ';

                }
                elseif($strain->Category=='sativa')
                {
                    echo 'bg-white ';

                }
        ?>

                            ">

                        <div class="item-box" 
                        <?php 
                            if($strain->Category=='Indica')
                                {
                                    echo 'style="border:4px solid #e74c3c;padding:20px;border-radius:5px"' ;

                                } 
                            elseif($strain->Category=='Sativa')
                                {
                                    echo 'style="border:4px solid #1abc9c;padding:20px;border-radius:5px"' ;

                                }
                            elseif($strain->Category=='Hybrid')
                                {
                                    echo 'style="border:4px solid #3498db;padding:20px;border-radius:5px"' ;

                                }  
                        ?>
                        >
                            <a href="Medical-Marijuana-Strain-Guide/<?php echo $strain->UrlName; ?>">
                                <div class="">
                                    <div class=" text-center">
                                        <h2 class=" symbol "><?php echo $strain->Symbol; ?></h2>

                                        <h5 ><?php echo $strain->Name; ?></h5>
                                         <p><img class="col-md-12 pull-right" src="<?php echo $strain->StarImage; ?>"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php
                    }

                    ?>
                    </div>


                    </body>
                    </html>


                    
                </div>

            </div>

        </section>
        <!-- End Work Detail Section -->

    <!-- End CONTENT -->

