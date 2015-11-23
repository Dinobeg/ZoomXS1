@extends('app')

@if ($user == 'admin')
@section('sidebar')
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
                  <li class="sub-menu">
                      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon_document_alt"></i>
                          <span>Other</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="task_categories.html">Task Categories</a></li>                          
                          <li><a class="" href="roles.html">Roles</a></li>
                          <li><a class="" href="companies.html">Companies</a></li>
                          <li><a class="" href="contracts.html">Contracts</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
        </aside>
@stop
@endif
@else