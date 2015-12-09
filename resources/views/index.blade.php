<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ZoomXS Dashboard">
    <meta name="keyword" content="ZoomXS, Dashboard, Admin, Template, Maintenance, Bootstrap, Laravel, Responsive, Retina, Minimal">
    <title>ZoomXS Dashboard</title>

    <!-- Bootstrap CSS -->    
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/bootstrap-theme.css') !!}
    <!-- font icon -->
    {!! Html::style('css/elegant-icons-style.css') !!}
    {!! Html::style('assets/font-awesome/css/font-awesome.css') !!}   
    <!-- full calendar css-->
    {!! Html::style('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') !!}
    <!-- owl carousel -->
    {!! Html::style('css/owl.carousel.css') !!}
    <!-- Custom styles -->
    
    {!! Html::style('css/style_nedim.css') !!}
    {!! Html::style('css/style.css') !!}
    
    {!! Html::style('css/style-responsive.css') !!}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
        {!! Html::script('js/html5shiv.js') !!}
        {!! Html::script('js/respond.min.js') !!}
        {!! Html::script('js/lte-ie7.js') !!}
    <![endif]-->

  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      

      <header class="header white-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo"><span>Zoom</span> <span class="lite">XS</span></a>
            <!--logo end-->

<form action="/login">
  <button id="loginbutton" type="submit" class="btn btn-primary" >Login</button>
</form>
            
                   
           
      </header>      
      <!--header end-->

      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">    



    <!-- standard packages -->
 <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------- -->


  <div id="standard">
  <div id="ThreeHolder">
    <div id="SlopeONE">
      <h2>Basic</h2>
      <p><a href="#"><img src="images/shopping.png" alt="product" width="173" height="149" border="0"/></a></p>
      <a id="desc_link" href="#">Monthly subscription</a>
      <p>Package offering 15 questions monthly<br />
        <strong>Staff available during working hours</strong> 100KM per month <br />
        </p>
    </div>
    <div id="SlopeTWO">
      <h2>Standard</h2>
      <p><a href="#"><img src="images/shopping.png" alt="product" width="173" height="149" border="0" /></a></p>
      <a id="desc_link" href="#">Monthly subscription</a>
      <p>Package offering 30 questions monthly<br />
        <strong>Staff available until 20:00 PM every day</strong> 190KM per month <br />
        </p>
    </div>
    <div id="SlopeTHREE">
      <h2>Premium</h2>
      <p><a href="#"><img src="images/shopping.png" alt="product" width="173" height="149" border="0" /></a></p>
      <a id="desc_link" href="#">Monthly subscription</a>
      <p>Package offering unlimited questions monthly<br />
        <strong>Staff available 24/7</strong> 300KM per month <br />
        </p>
    </div>
  </div>
</div>

   
          </section>
      </section>
      <!--main content end-->

  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>

  <script>
        jQuery(document).ready(function(){
        jQuery('#hideshow').on('click', function(event) {        
             jQuery('#content').toggle('show');
            });
            });
     

  </script>

  </body>
</html>
