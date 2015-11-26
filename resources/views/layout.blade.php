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
      <a href="#" class="logo">Zoom<span>XS</span> <span class="lite">Dashboard</span></a>
      <!--logo end-->

      <form action="/../auth/logout">
        <button id="loginbutton" type="submit" class="btn btn-primary" >Logout</button>
      </form>
    </header>      
    <!--header end-->
      
    
    @yield('sadmin')
    @yield('sclient')
    @yield('semployee')
    @yield('smanager')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">            
            <!--overview start-->
            <div class="row state-overview">
                <div class="col-lg-4">
                <!--user profile info start-->
                <section class="panel">
                    <div class="profile-widget profile-widget-info">
                        <div class="panel-body">
                          <div class="col-lg-4 col-sm-4 profile-widget-name">
                            <h4>ssssss</h4>               
                            <div class="follow-ava">
                                <img src="img/Empty_Profile.jpg" alt="">
                            </div>
                            <h6>Administrator</h6>
                          </div>
                          <div class="col-lg-8 col-sm-8 follow-info">
                              <p>Dssssss</p>
                              <p>@johnsmith</p>
                              <h6>
                                  <span><i class="icon_clock_alt"></i>11:05 AM</span>
                                  <span><i class="icon_calendar"></i>25.10.13</span>
                                  <span><i class="icon_pin_alt"></i>NY</span>
                              </h6>
                          </div>
                          <div class="weather-category twt-category">
                                    <ul>
                                        <li class="active">
                                            <h4>50</h4>
                                            <i class="icon_close_alt2"></i> Pending Task
                                        </li>
                                        <li>
                                            <h4>550</h4>
                                            <i class="icon_check_alt2"></i> Completed
                                        </li>
                                        <li>
                                            <h4>600</h4>
                                            <i class="icon_plus_alt2"></i> Total Task
                                        </li>
                                    </ul>
                                </div>
                        </div>
                        <footer class="profile-widget-foot">
                          <div class="follow-task">
                              <span>
                              <a href="">
                                  <i class="icon_mail_alt tooltips" data-original-title="My Mail"></i>
                                  <span class="badge bg-important">4</span>
                              </a>
                              </span>
                              <span>
                              <a href="">
                                  <i class="icon_percent tooltips" data-original-title="My Profit"></i>                                                                       </a>
                              </span>
                              <span>
                              <a href="">
                                  <i class="icon_heart_alt tooltips" data-original-title="Favorits"></i>                                    
                                  <span class="badge bg-important">2</span>
                              </a>
                              </span>
                              <span>
                              <a href="">
                                  <i class="icon_cart_alt tooltips" data-original-title="Sell"></i>                                    
                              </a>
                              </span>
                              <span>
                              <a href="">
                                  <i class="icon_lightbulb_alt tooltips" data-original-title="Suggesation"></i>                                    
                                  <span class="badge bg-important">6</span>
                              </a>
                              </span>
                              <span>
                              <a href="">
                                  <i class="icon_piechart tooltips" data-original-title="Reports"></i>                                    
                              </a>
                              </span>
                              
                          </div>
                        </footer>
                    </div>
                </section>
                <!--user profile info end-->
              </div>
              
            </div>
            <!--overview end-->

            <!-- project team & activity start -->
            <div class="row">
                <div class="col-lg-4">
                    <!--project team start-->
                    <section class="panel">
                      <div class="panel-body project-team">
                          <div class="task-progress">
                                <h1>Project Team</h1>  
                          </div>
                      </div>
                      <table class="table table-hover personal-task">
                            <tbody>
                            <tr>
                                <td>
                                  <span class="profile-ava">
                                      <img alt="" class="simple" src="img/avatar1_small.jpg">
                                  </span>
                                </td>
                                <td>
                                    <p class="profile-name">John Doe</p>
                                    <p class="profile-occupation">UX Designer</p>
                                </td>
                                <td>
                                    <span class="badge bg-important">75%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                  <span class="profile-ava">
                                      <img alt="" class="simple" src="img/avatar-mini.jpg">
                                  </span>
                                </td>
                                <td>
                                    <p class="profile-name">Rena Rios</p>
                                    <p class="profile-occupation">UX Designer</p>
                                </td>
                                <td>
                                    <span class="badge bg-success">43%</span>
                                </td>                                  
                            </tr>
                            <tr>
                                <td>
                                  <span class="profile-ava">
                                      <img alt="" class="simple" src="img/avatar-mini2.jpg">
                                  </span>
                                </td>
                                <td>
                                    <p class="profile-name">Robin Mathis</p>
                                    <p class="profile-occupation">UX Designer</p>
                                </td>
                                <td>
                                    <span class="badge bg-info">67%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                  <span class="profile-ava">
                                      <img alt="" class="simple" src="img/avatar-mini3.jpg">
                                  </span>
                                </td>
                                <td>
                                    <p class="profile-name">Bennie Gilliam</p>
                                    <p class="profile-occupation">UX Designer</p>
                                </td>
                                <td>
                                    <span class="badge bg-warning">30%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                  <span class="profile-ava">
                                      <img alt="" class="simple" src="img/avatar-mini4.jpg">
                                  </span>
                                </td>
                                <td>
                                    <p class="profile-name">Eddy Wilcox</p>
                                    <p class="profile-occupation">UX Designer</p>
                                </td>
                                <td>
                                    <span class="badge bg-primary">15%</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </section>
                    <!--Project Team end-->
                </div>

                <div class="col-lg-8">
                    <!--Project Activity start-->
                    <section class="panel">
                        <div class="panel-body progress-panel">
                          <div class="row">
                            <div class="col-lg-8 task-progress pull-left">
                                <h1>Project Activity</h1>                                  
                            </div>
                            <div class="col-lg-4">
                              <span class="profile-ava pull-right">
                                      <img alt="" class="simple" src="img/avatar1_small.jpg">
                                      John Doe
                              </span>                                
                            </div>
                          </div>
                        </div>
                        <table class="table table-hover personal-task">
                            <tbody>
                            <tr>
                                <td>Today</td>
                                <td>
                                    Project SRS.
                                </td>
                                <td>
                                    <span class="badge bg-important">Upload</span>
                                </td>
                                <td>
                                  <span class="profile-ava">
                                      <img alt="" class="simple" src="img/avatar1_small.jpg">
                                  </span>
                                </td>
                            </tr>
                            <tr>
                                <td>Yesterday</td>
                                <td>
                                    Project Design Task
                                </td>
                                <td>
                                    <span class="badge bg-success">Task</span>
                                </td>
                                <td>
                                    <div id="work-progress2"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>21.10.13</td>
                                <td>
                                    Generate Invoice
                                </td>
                                <td>
                                    <span class="badge bg-success">Task</span>
                                </td>
                                <td>
                                    <div id="work-progress3"></div>
                                </td>
                            </tr>                              
                            <tr>
                                <td>22.10.13</td>
                                <td>
                                    Project Testing
                                </td>
                                <td>
                                    <span class="badge bg-primary">To-Do</span>
                                </td>
                                <td>
                                    <span class="profile-ava">
                                      <img alt="" class="simple" src="img/avatar1_small.jpg">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>24.10.13</td>
                                <td>
                                    Project Release Date
                                </td>
                                <td>
                                    <span class="badge bg-info">Milestone</span>
                                </td>
                                <td>
                                    <div id="work-progress4"></div>
                                </td>
                            </tr>                              
                            <tr>
                                <td>28.10.13</td>
                                <td>
                                    Project Release Date
                                </td>
                                <td>
                                    <span class="badge bg-primary">To-Do</span>
                                </td>
                                <td>
                                    <div id="work-progress5"></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </section>
                    <!--Project Activity end-->
                </div>
            </div>
            <!-- project team & activity end -->
        </section>
      </section>
    <!--main content end-->
    </section>

    <!-- javascripts -->
    {!! Html::script('js/jquery.js') !!}
    {!! Html::script('js/jquery-1.8.3.min.js') !!}
    {!! Html::script('js/jquery-ui-1.9.2.custom.min.js') !!}
    <!-- bootstrap -->
    {!! Html::script('js/bootstrap.min.js') !!}
    <!-- nice scroll -->
    {!! Html::script('js/jquery.scrollTo.min.js') !!}
    {!! Html::script('js/jquery.nicescroll.js') !!}
    <!-- charts scripts -->
    {!! Html::script('assets/jquery-knob/js/jquery.knob.js') !!}
    {!! Html::script('js/owl.carousel.js') !!}
    <!-- jQuery full calendar -->
    {!! Html::script('assets/fullcalendar/fullcalendar/fullcalendar.min.js') !!}
    <!--script for this page only-->
    {!! Html::script('js/calendar-custom.js') !!}
    <!-- custom select -->
    {!! Html::script('js/jquery.customSelect.min.js') !!}
    <!--custome script for all page-->
    {!! Html::script('js/scripts.js') !!}
    <!-- custom script for this page-->
    {!! Html::script('js/sparkline-chart.js') !!}
    {!! Html::script('js/easy-pie-chart.js') !!}

    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });
      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });
      //custom select box
      $(function(){
          $('select.styled').customSelect();
      });
    </script>
  </body>
</html>
