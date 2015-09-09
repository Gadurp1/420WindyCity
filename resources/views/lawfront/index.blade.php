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
<script>
  $(function() {
    var availableTags = [

		<?php foreach($blogPosts as $panels){

			echo '"'.$panels->content.'",';
		}
		?>



    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });
  </script>
<body class="full-intro background--dark">
@include('layouts/sximone/topbar')

    <!-- Search menu Top -->
    <section class=" top-search-bar overlay-dark cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top">
        <div class="container">
            <div class="search-wraper">

                <input type="text" class="input-sm form-full" placeholder="Search..." name="search" />
                <a class="search-bar-icon"><i class="fa fa-search"></i></a>
                <a class="bar-close toggle-menu menu-top push-body"><i class="ion ion-android-close"></i></a>

            </div>
        </div>
    </section>
    <!--End Search menu Top -->

    <!-- Site Wraper -->
    <div class="wrapper">

     
        <!-- Intro Section -->
        <section class="inner-intro bg-img overlay-dark light-color parallax parallax-background2" style="background-image: url('{{ asset('sximo/themes/420/img/court.jpg') }}');">
            <div class="container" style="width:60%">
                <div class="row title">
                
                <h1>Know the Law</h1>
                
                <h3> A Guide for Doctors and Patients</h3>

                <form class="contact-form" id="contact" action="" method="post" role="form">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="ui-widget">
                            <input class="col-md-12 ghost-white" name="search" id="tags">
                                <div class="row">
                                    <div class="col-md-6">  
                                        <button href="law-single.php" class="btn btn-md btn-success  form-full">Search</button>
                                    </div>
                                    <div class="col-md-6">  
                                        <button type="submit" class="btn btn-md btn-color-b form-full">Full Doc</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                </div>
            </div>
        </section>
        <!-- End Intro Section -->

        <div class="clearfix"></div>

        <!-- START CONTENT -->
        <section>
            <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">

                <p>On <b>August 1, 2013, Gov. Pat Quinn signed the state’s medical marijuana pilot program into law</b>, Which will protect registered patients and their physicians from civil and criminal penalties. That <b>law will go into effect January 1, 2014</b>. Currently, twenty states have medical marijuana laws that work well by protecting hundreds of thousands of seriously ill patients from arrest.</p>

            <h2>What Is the Doctor’s Role?</h2>

            <p>Physicians must fill out a form that will be created by the Department of Public Health certifying
            that the patient has a qualifying medical condition, he or she is likely to receive medical benefit
            from the medical use of marijuana, and the patient is under the physician’s care for the qualifying
            condition.</p>

            <h2>What Conditions Qualify?</h2>

            <ul class="list-group col-md-6">
                <li class="list-group-item">Syringomyelia</li>
                <li class="list-group-item">Spinal Cord Injury</li>
                <li class="list-group-item">Traumatic Brain Injury and Post- Concussion Syndrome</li>
                <li class="list-group-item">Multiple Sclerosis</li>
                <li class="list-group-item">Arnold-chiari Malformation</li>
                <li class="list-group-item">Cancer</li>
                <li class="list-group-item">Glaucoma</li>
                <li class="list-group-item">Hiv/Aids</li>
                <li class="list-group-item">Hepatitis C</li>
                <li class="list-group-item">Amyotrophic Lateral Sclerosis</li>
                <li class="list-group-item">Crohn’s Disease</li>
                <li class="list-group-item">Agitation of Alzheimer’s Disease</li>
                <li class="list-group-item">Wasting Syndrome</li>
                <li class="list-group-item">Muscular Dystrophy</li>
                <li class="list-group-item">Severe Fibromyalgia</li>
                <li class="list-group-item">Spinal Cord Disease</li>
                <li class="list-group-item">Tarlov Cysts</li>
                <li class="list-group-item">Hydromyelia</li>
            </ul>
            <ul class="list-group col-md-6">

                <li class="list-group-item">Spinocerebellar Ataxia</li>
                <li class="list-group-item">Parkinson’s Disease</li>
                <li class="list-group-item">Tourette Syndrome</li>
                <li class="list-group-item">Myoclonus</li>
                <li class="list-group-item">Dystonia</li>
                <li class="list-group-item">Reflex Sympathetic Dystrophy</li>
                <li class="list-group-item">Causalgia</li>
                <li class="list-group-item">Neurofibromatosis</li>
                <li class="list-group-item">Chronic Inflammatory Demyelinating Polyneuropathy</li>
                <li class="list-group-item">Sjögren’s Syndrome</li>
                <li class="list-group-item">Lupus</li>
                <li class="list-group-item">Interstitial Cystitis</li>
                <li class="list-group-item">Myasthenia Gravis</li>
                <li class="list-group-item">Rheumatoid Arthritis</li>
                <li class="list-group-item">Hydrocephalus</li>
                <li class="list-group-item">Nail Patella Syndrome</li>
                <li class="list-group-item">Residual Limb Pain or The Treatment of These Conditions.</li>
           
                <li class="list-group-item">Residual Limb Pain or The Treatment of These Conditions.</li>
            </ul>

<hr><hr/>

<br>
            <h2>Can Doctors Be Prosecuted For Signing a Certification?</h2>
            <p>In addition, the Department of Public Health can approve additional debilitating medical conditions.
            Has the Federal Government Punished Practitioners Who Recommend Medical Marijuana? No. The U.S.
            Court of Appeals for the Ninth Circuit ruled that doctors cannot be punished — or even investigated
            — solely for recommending medical marijuana, because doing so is protected free speech (Conant v.
            Walters). The U.S. Supreme Court let the decision stand.</p>
            <p>Illinois‘ new law explicitly protects doctors from punishment. It states that a physician is not
            subject to arrest, prosecution, or penalty in any manner for providing a written certification.</p>

            <footer class="pb-1"><cite>410 ILCS 130/25, Section 25(e)</cite></footer>

            <p><small>To date, according to our best information, no doctors have been prosecuted for recommending
            medical marijuana in these states, and no patients have been convicted for possessing marijuana
            consistent with the law in Illinois.</small></p>

            <h2>What Must a Doctor Do Before Making a Recommendation?</h2>

                <ul class="list-group">
                    <li class="list-group-item">Be currently licensed and in good standing</li>
                    <li class="list-group-item">Hold a state-issued controlled substances license</li>
                    <li class="list-group-item">Comply with the standards of practice</li>
                    <li class="list-group-item">Maintain records of exams</li>
                    <li class="list-group-item">Treat the patient for the underlying condition</li>
                </ul class="list-group-item">

            <h2>What Can’t a Doctor Do When Making a Recommendation?</h2>

                <ul class="list-group">
                    <li class="list-group-item">Conduct an exam using telemedicine technology</li>
                    <li class="list-group-item">Receive pay from or refer patients to marijuana businesses</li>
                    <li class="list-group-item">Conduct an exam at a location where medical marijuana is sold</li>
                    <li class="list-group-item">Have a direct or indirect economic interest in a cultivator or dispensary</li>
                    <li class="list-group-item">Advertise in a cultivation center or dispensary</li>
                    <li class="list-group-item">Help patients obtain marijuana or offer advice on usage</li>
                </ul class="list-group-item">
            
            <h2>When Can Patients Apply?</h2>
                <p>The date is not yet set. Beginning January 1, 2014, the various regulatory agencies will have four
                    months to develop application forms and rules they will use to administer the program. Shortly
                    after the law was passed, the Department of Agriculture said they would probably not accept
                    applications for cultivation centers until the fall of 2014.</p>
            <h2>What Restrictions Are There For Patients?</h2>
                <h4>Patients may not:</h4>
                <ul class="list-group">
                    <li class="list-group-item">Grow marijuana</li>
                    <li class="list-group-item">Obtain more than 2.5 ounces every 14 days</li>
                    <li class="list-group-item">Drive under the influence of marijuana</li>
                    <li class="list-group-item">Give or sell marijuana to anybody</li>
                    <li class="list-group-item">Possess marijuana on a school bus or school grounds</li>
                    <li class="list-group-item">Possess marijuana in a vehicle that is outside a secure, sealed, and tamper-proof container that</li>
                    <li class="list-group-item">Use cannabis in a public place or in knowing proximity to anyone under 18</li>
                    <li class="list-group-item">Smoke marijuana where smoking is prohibited</li>
                </ul class="list-group-item">

            <h2>More Information:</h2>
                <p>A summary of research on the medical value of marijuana in alleviating conditions and their symptoms is available at: <a href="www.mpp.org/research">Marijuana Policy Project</a></p>
                <p>This is not intended as a substitute for reading the entire law and all regulations. A link to the applicable law may be found at: <a href="http://www.idph.state.il.us/HealthWellness/MedicalCannabis/index.htm">Illinois Department of Public Health</a></p>

        </div>
    </div>
        <!-- End CONTENT -->

</section>  


        <!-- End CONTENT -->
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