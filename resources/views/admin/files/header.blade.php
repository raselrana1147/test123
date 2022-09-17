  <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="{{ route('admin.dashboard') }}">
                            <img class="img-fluid" src="{{ logo()}}" alt="Theme-Logo" width="75%">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                        
                            <li class="user-profile">
                                <a href="{{ route('admin.enroll_patient') }}" class="btn btn-success text-white p-2"><i class="icofont icofont-ui-add"></i>Enroll Patient</a>
                                   
                            </li>
                           
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{Auth::user()->avatar !=null ? asset('assets/backend/image/profile/'.Auth::user()->avatar) : default_image()}}" class="img-radius" alt="User-Profile-Image">
                                        <span>{{Auth::user()->name}}</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                       
                                        <li>
                                            <a href="{{ route('admin.profile_form') }}">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                       
                                        <li>
                                            <a href="{{ route('admin.password_form') }}">
                                                <i class="feather icon-lock"></i> Change Password
                                            </a>
                                        </li>
                                        <li>
                                            <form method="POST" action="{{ route('admin_logout') }}">
                                                @csrf

                                                <a :href="route('admin_logout')"
                                                        onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                                    <i class="feather icon-log-out"></i> {{ __('Sign Out') }}
                                                </a>
                                            </form>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>