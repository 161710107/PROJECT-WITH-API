  <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="assets/img/message/2.jpg" alt="" />
                    </a>
                    <h3>{{ Auth::user()->name }}</h3>
                    <strong>AD+</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="dashboard.html" class="dropdown-item">Dashboard v.1</a>
                                <a href="dashboard-2.html" class="dropdown-item">Dashboard v.2</a>
                                <a href="analytics.html" class="dropdown-item">Analytics</a>
                                <a href="widgets.html" class="dropdown-item">Widgets</a>
                            </div>
                        </li>
                        <li class="nav-item"><a  href="{{ url('/category') }}" role="button" aria-expanded="false"><i class="fa fa-list-alt"></i> <span class="mini-dn">Kategori</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        </li>



                        <li class="nav-item"><a  href="{{ url('/event') }}" role="button" aria-expanded="false"><i class="fa fa-calendar-check-o"></i> <span class="mini-dn">Event</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        </li>


                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class=" fa fa-bank"></i> <span class="mini-dn">Bank</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="{{ url('/bank') }}"  class="dropdown-item">Bank</a>
                                <a href="{{ url('/masterbank') }}" class="dropdown-item">Master Bank</a>
                            </div>
                        </li>
                   
                        <li class="nav-item"><a href="{{ url('/transfer') }}" role="button" aria-expanded="false" ><i class="fa fa-upload"></i> <span class="mini-dn">Transfer</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        </li>
  

                        <li class="nav-item"><a href="{{ url('/user') }}" role="button" aria-expanded="false" ><i class="fa fa-user"></i> <span class="mini-dn">User</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        </li>
                    
                       
                    </ul>
                </div>
            </nav>