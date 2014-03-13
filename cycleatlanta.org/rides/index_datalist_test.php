  <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
 <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CyclePhilly: Interactive map</title>
        <meta name="description" content="">
<meta name="viewport" content="width=device-width, user-scalable=no" />
        <link rel="stylesheet" href="http://mytracks.phillyopen.org/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.css" /> -->
<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7/leaflet.css" />

        <link rel="stylesheet" href="http://mytracks.phillyopen.org/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/base/jquery-ui.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="chosen/chosen.css">



   <!-- Main site js css -->  

      <link rel="stylesheet" href="./css/style.css"/>


    <script src="js/picturefill.js"></script>
    <script src="js/matchmedia.js"></script>


    
    <!-- Normalize hide address bar for iOS and Android -->
    <script src="./js/hideaddressbar.js"></script>


</head>
<body>
<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->



<body lang="en">


  <div id="branding"><a href="http://cycle-philly.rhcloud.com/" ><div id="logo"><img class="img-responsive" src="img/logo.png"/></div><div id="cyclephilly">CyclePhilly</div><span id="ride">Ride. Record. Reimagine Your Routes.</span></a></div>


    <div id="container-nav" class="wrapper">

      <!-- <div><a href="#" ><div id="logo"><img class="img-responsive" src="img/logo.png"/></div><div id="cyclephilly">CyclePhilly</div><span id="ride">Ride. Record. Reimagine Your Routes.</span></a></div> -->

    <!--Add opening <section> tag below here-->
    
    <section id="nav">

    
 <!-- Checkbox Hack markup -->
       <!--  <input type="checkbox" id="toggle" />
        <label for="toggle" onclick>Menu</label> -->
        <!-- /Checkbox Hack markup -->

         <nav>
   

        </nav>


  </section>

  <section class="float-left">
<p id="chunk1" class="pad-5">to see the tracks your fellow bikers are carving throughout the city, choose one or multiple trip purposes and then select 'Make Tracks'</p>
 <div class="clear-fix>"
        <div class="float-right">
        <form id="ca_data_selector" action="#" class="float-left pad-5">
            <select id="ca_data_selector_field" list="purposes" multiple="true" style="width:150px;">
              <datalist id="Ride Purpose:">
              <option value="Commute">Commute</option>
              <option value="School">School</option>
              <option value="Work-Related">Work Related</option>
              <option value="Exercise">Exercise</option>
              <option value="Social">Social</option>
              <option value="Shopping">Shopping</option>
              <option value="Errand">Errand</option>
              <option value="Other">Other</option>
              </datalist>
              
             <!-- <optgroup label="Rider Type:">
              <option value="Strong & fearless">Strong &amp; Fearless</option>
              <option value="Enthused & confident">Enthused &amp; Confident</option>
              <option value="Comfortable, but cautious">Comfortable but Cautious</option>
              <option value="Interested, but concerned">No Way, No How</option>
              </optgroup> -->
            </select>
           <input type="submit" value="&rsaquo; Make Tracks" class="float-left pad-5" id="scroll"/>
        
        
          
           
        
        </form>

      </div>



    </div>


</section>
        
           
<div id="map"></div>



<!-- </div> -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://maps.stamen.com/js/tile.stamen.js?v1.2.1"></script>
<!-- <script src="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.js"></script> --> 

<script src="http://cdn.leafletjs.com/leaflet-0.7/leaflet.js"></script>

<!-- <script src="js/main.js"></script> --> 
<script src="js/main_datalist.js"></script>


</body>
</html>
