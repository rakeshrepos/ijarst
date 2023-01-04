<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div>
                    <img src="{{asset ('uploads/admin_profile/'.Auth::user()->image)}}" alt="user-img" class="img-circle">
                </div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">{{ Auth::user()->name }}
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="{{ url('admin/profile') }}" class="dropdown-item">
                            <i class="ti-user"></i> My Profile</a>
                       
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="icon-logout"></i> Logout
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        <!-- text-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                
                <li>
                    <a class="waves-effect waves-dark" href="{{url('/admin/dashboard')}}" aria-expanded="false">
                        <i class="icon-speedometer"></i>
                        <span class="hide-menu">Dashboard
                            
                        </span>
                    </a>
                    
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Paper List</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{url('admin/paper')}}">Paper List By User</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Approved Paper List</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                        <a href="{{url('admin/approved-paper')}}">View Paper List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Eboard List</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{url('admin/eboard')}}">View Eboard List</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">News Update</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{url('admin/news')}}">View News Update</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Issue & Volume</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{url('admin/issue')}}">Manage Issue</a>
                        </li>
                        <li>
                            <a href="{{url('admin/volume')}}">Manage Volume</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">User Message</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{url('admin/contact')}}">View Message</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>