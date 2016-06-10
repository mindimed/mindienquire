            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
              {{ HTML::image('assets/img/img.jpg', '...', array('class' => 'img-circle profile_img')) }}
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
                  <li><a><i class="fa fa-home"></i> Master Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/organizations')}}">Organizations</a></li>
                      <li><a href="{{url('/roles')}}">Roles</a></li>
                      <li><a href="{{url('/users')}}">Users</a></li>
                      <li><a href="#">Hotels (N/A)</a></li>
                      <li><a href="#">Hotel Admin (N/A)</a></li>
                    </ul>
                  </li>
                  <li><a href="{{url('/enquiries')}}"><i class="fa fa-home"></i> Enquiries</a></li>
                  <li><a><i class="fa fa-edit"></i> Hotel Management <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/offers')}}">Offer (Special / Package)</a></li>
                      <li><a href="{{url('/rooms')}}">Rooms</a></li>
                      <li><a href="{{url('/booking_engines')}}">Booking Engine</a></li>
                      <li><a>Email<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="{{url('/email_templates')}}">Email Templates</a></li>
                            <li><a href="{{url('/email_settings')}}">Email Settings</a></li>
                          </ul>
                        </li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-home"></i> SAMPLE FOR TESTING <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/organizations')}}">FORM ENQUIRE</a></li>
                      <li><a href="{{url('/roles')}}">Roles</a></li>
                      <li><a href="{{url('/users')}}">Users</a></li>
                      <li><a href="#">Hotels</a></li>
                      <li><a href="#">Hotel Admin</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
            
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->