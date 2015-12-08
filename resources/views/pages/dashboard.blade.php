
@extends('layout')

<!-- SIDEBAR ADMIN -->
@if( Auth::user()->name == 'admin')
  @section('sadmin')
<!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon_document_alt"></i>
                          <span>Solutions</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="browse_solutions.html">Browse Solutions</a></li>                          
                          <li><a class="" href="insert_solution.html">Insert Solution</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon_document_alt"></i>
                          <span>Clients</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="browse_clients.html">Browse Clients</a></li>                          
                          <li><a class="" href="insert_clients.html">Insert Clients</a></li>                         
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon_document_alt"></i>
                          <span>Staff</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="browse_staff.html">Browse Staff</a></li>                          
                          <li><a class="" href="insert_staff.html">Insert Staff</a></li>
                          <!-- update staff, modify contract -->
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon_document_alt"></i>
                          <span>Teams</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="browse_teams.html">Browse Teams</a></li>                          
                          <li><a class="" href="insert_team.html">Insert Team</a></li>
                      </ul>
                  </li>
                  <!-- OTHER -->
                  <li class="sub-menu">
                      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon_document_alt"></i>
                          <span>Other</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <!-- TASK CATEGORY -->
                          <li><a type="button" class="" data-toggle="modal" data-target="#tc">Task Category</a></li>
                          <!-- Modal -->
                          <div id="tc" class="modal fade table-modal" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Task Category Table</h4>
                                </div>
                                <!-- Modal INSERT-->
                                <div class="text-right"> 
                                    <button type="button" data-toggle="modal" data-target="#tci" class="btn btn-default btn-md">
                                      <span class="glyphicon glyphicon-plus"></span> Insert 
                                    </button>
                                  </div>
                                  <div id="tci" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Insert new user</h4>
                                        </div>
                                        <div class="modal-body">             
                                          <form class="form-horizontal" method="POST" action="/tc/store">
                                          {!! csrf_field() !!}
                                            <div class="form-group">
                                              <label class="col-sm-2 control-label">Name</label>
                                              <div class="col-sm-10">
                                                  <input type="text" name="name" value="{{ old('name') }}">
                                              </div>
                                            </div>
                                            <div>
                                                <button type="submit">Insert</button>
                                            </div>
                                          </form>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>  
                                  <!-- END MODAL INSERT -->
                                <div class="modal-body">             
                                  <table class="responsive-table">
                                   <tbody>
                                      <tr>
                                         <th class="col-sm-3"><i class="icon_profile"></i>Name</th>
                                         <th class="col-sm-3"><i class="icon_calendar"></i>Created at</th>
                                         <th class="col-sm-3"><i class="icon_calendar"></i>Updated at</th>
                                         <th class="col-sm-1"><i class="icon_cogs"></i> Action</th>
                                      </tr>
                                      @foreach ($task_categories as $c)
                                      <tr>
                                         <td>{{ $c->name }}</td>
                                         <td>{{ $c->created_at->format('d/m/Y H:i') }}</td>
                                         <td>{{ $c->updated_at->format('d/m/Y H:i') }}</td>
                                         <td>
                                          <div class="btn-group">
                                            
                                                
                                              <!-- Modal INSERT-->
                                              <div class="text-right"> 
                                                <button type="button" data-toggle="modal" data-target="#tcu" class="btn btn-primary"><i class="icon_plus_alt2"></i></a>
                                                </div>
                                                <div id="tcu" class="modal fade" role="dialog">
                                                  <div class="modal-dialog">
                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h4 class="modal-title">Update user</h4>
                                                      </div>
                                                      <div class="modal-body">             
                                                        {!! Form::open(['method' => 'PATCH','route' => ['route.update', $c->id] ], ['class' => 'form-horizontal']) !!}
                                                        {!! csrf_field() !!}
                                                          <div class="form-group">
                                                            <label class="col-sm-2 control-label">Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="name" value="{{ old('name') }}">
                                                            </div>
                                                          </div>
                                                          <div>
                                                              <button type="submit">Update</button>
                                                          </div>
                                                       {!! Form::close() !!}
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>  
                                                <!-- END MODAL INSERT -->



                                                
                                             
                                            {!! Form::open(['method' => 'DELETE','route' => ['route.destroy', $c->id] ]) !!}
                                                <button type="submit" class="btn btn-danger"><i class="icon_close_alt2"></i></a>
                                              {!! Form::close() !!}
                                          </div>
                                          </td>
                                      </tr>
                                      @endforeach                             
                                   </tbody>
                                  </table>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div> 
                          <!-- END TASK CATEGORY -->

                          <!-- USERS -->
                          <li><a type="button" class="" data-toggle="modal" data-target="#rolet">Manage Users</a></li>
                          <!-- Modal -->
                          <div id="rolet" class="modal fade table-modal" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Users Table</h4>
                                </div>
                                <div class="modal-body">  
                                 <!-- Modal INSERT-->  
                                  <div class="text-right"> 
                                    <button type="button" data-toggle="modal" data-target="#role" class="btn btn-default btn-md">
                                      <span class="glyphicon glyphicon-plus"></span> Insert 
                                    </button>
                                  </div>
                                  <div id="role" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Insert new user</h4>
                                        </div>
                                        <div class="modal-body">             
                                          <form class="form-horizontal" method="POST" action="/auth/register">
                                          {!! csrf_field() !!}
                                            <div class="form-group">
                                              <label class="col-sm-2 control-label">Role</label>
                                              <div class="col-sm-10">
                                                  <input type="text" name="name" value="{{ old('name') }}">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" name="email" value="{{ old('email') }}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" name="password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Confirm Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" name="password_confirmation">
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit">Register</button>
                                            </div>
                                          </form>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>  
                                  <!-- END MODAL INSERT -->

                                  <!-- MODAL TABLE -->      
                                  <table class="responsive-table">
                                   <tbody>
                                      <tr>
                                         <th class="col-sm-3"><i class="icon_profile"></i>Role</th>
                                         <th class="col-sm-2"><i class="icon_mail_alt"></i>Email</th>
                                         <th class="col-sm-3"><i class="icon_calendar"></i>Created at</th>
                                         <th class="col-sm-3"><i class="icon_calendar"></i>Updated at</th>
                                         <th class="col-sm-1"><i class="icon_cogs"></i>Action</th>
                                      </tr>
                                      @foreach ($users as $user)
                                      <tr>
                                         <td>{{ $user->name }}</td>
                                         <td>{{ $user->email }}</td>
                                         <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                                         <td>{{ $user->updated_at->format('d/m/Y H:i') }}</td>
                                         <td>
                                          <div class="btn-group">
                                              <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                              <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                          </div>
                                          </td>
                                      </tr>
                                      @endforeach                          
                                   </tbody>
                                </table>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- END USERS -->

                          <!-- COMPANIES -->
                          <li><a class="" href="companies.html">Companies</a></li>
                          <!-- END COMPANIES -->
                          
                          <!-- CONTRACTS -->
                          <li><a class="" href="contracts.html">Contracts</a></li>
                          <!-- END CONTRACTS -->
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
  @stop
@endif
<!-- SIDEBAR CLIENT -->
@if( Auth::user()->name == 'client')
  @section('sclient')
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">                
                <li class="active">
                    <a class="" href="index.html">
                        <i class="icon_house_alt"></i>
                        <span>Dashboard</span><br/>
                        <span>Solution Name</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon_document_alt"></i>
                        <span>Questions</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="browse_solutions.html">Browse Questions</a></li>                          
                        <li><a class="" href="insert_solution.html"><b>Ask a new question</b></a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon_document_alt"></i>
                        <span>Answers</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="browse_clients.html">Browse Answers</a></li>                                               
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon_document_alt"></i>
                        <span>Problems</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="browse_staff.html">Browse Problems</a></li>                          
                        <li><a class="" href="insert_staff.html"><b>Set a new problem</b></a></li>
                        <!-- update staff, modify contract -->
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon_document_alt"></i>
                        <span>Solutions</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="browse_teams.html">Browse Solutions</a></li>                          
                    </ul>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
  @stop
@endif
<!-- SIDEBAR EMPLOYEE -->
@if( Auth::user()->name == 'employee')
  @section('semployee')
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">                
                <li class="active">
                    <a class="" href="index.html">
                        <i class="icon_house_alt"></i>
                        <span>Dashboard</span><br/>
                        <span>Solution Name</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon_document_alt"></i>
                        <span>Questions</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="browse_solutions.html">Browse Questions</a></li>                          
                        <li><a class="" href="insert_solution.html"><b>Ask a new question</b></a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon_document_alt"></i>
                        <span>Answers</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="browse_clients.html">Browse Answers</a></li>                                               
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon_document_alt"></i>
                        <span>Problems</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="browse_staff.html">Browse Problems</a></li>                          
                        <li><a class="" href="insert_staff.html"><b>Set a new problem</b></a></li>
                        <!-- update staff, modify contract -->
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon_document_alt"></i>
                        <span>Solutions</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="browse_teams.html">Browse Solutions</a></li>                          
                    </ul>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
  @stop
@endif
<!-- SIDEBAR MANAGER -->
@if( Auth::user()->name == 'manager') 
<!-- treba provjerit i da mu je u contract rola manager i onda stavit sve if else 
UGLAVNOM NIJE OVO DOBRO !!-->
  @section('smanager')
    <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span><br/>
                          <span>Solution Name</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon_document_alt"></i>
                          <span>Questions</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="browse_solutions.html">Browse Questions</a></li>                          
                          <li><a class="" href="insert_solution.html"><b>Answer a question</b></a></li>
                          <li><a class="" href="insert_solution.html"><b>Pending questions</b></a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon_document_alt"></i>
                          <span>Answers</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="browse_clients.html">Browse Answers</a></li>                                               
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon_document_alt"></i>
                          <span>Problems</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="browse_staff.html">Browse Problems</a></li>                          
                          <li><a class="" href="insert_staff.html"><b>Solve a problem</b></a></li>
                          <!-- update staff, modify contract -->
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon_document_alt"></i>
                          <span>Solutions</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="browse_teams.html">Browse Solutions</a></li>                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon_document_alt"></i>
                          <span>Other</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="browse_teams.html">Allocate Staff</a></li>
                          <li><a class="" href="browse_teams.html">Manage Team</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
    <!--sidebar end-->
  @stop
@endif
@if( Auth::user()->name == 'admin')
@section('oadmin')
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
          <h6>{{Auth::user()->name}}</h6>
        </div>
        <div class="col-lg-8 col-sm-8 follow-info">
            <p>Dssssss</p>
            <p>{{Auth::user()->email}}</p>
            <h6>
                <span><i class="icon_clock_alt"></i>{{Carbon\Carbon::now('Europe/Sarajevo')->format('H:i')}}</span>
                <span><i class="icon_calendar"></i>{{Carbon\Carbon::now('Europe/Sarajevo')->format('d/m/Y')}}</span>
                <span><i class="icon_pin_alt"></i><!--dodati geolocation -->NY</span>
            </h6>
        </div>
        <div class="weather-category twt-category">
          <ul>
            <!-- example -->
              <li class="active">
                  <h4>50</h4>
                  <i class="icon_close_alt2"></i> Pending Task
              </li>
          </ul>
        </div>
      </div>
      <footer class="profile-widget-foot">
        <div class="follow-task">
          <span>
             <!-- example -->
          <a href="">
            <i class="icon_mail_alt tooltips" data-original-title="My Mail"></i>
            <span class="badge bg-important">4</span>
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
@stop
@endif