        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                            <img class="w-25 h-75 py-1" src="/images/icon/logo.png" alt="CoolAdmin" />
                        <h3 class="text-white p-3">Baiust Canteen</h3>
                    </div>
                    <div class="header__navbar my-4">
                        <ul class="list-unstyled">
                            @if(Auth::user()->user_type == 1)
                            <li class="has-sub">
                                <a href="{{ route('admin.dashboard') }}">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li class="has-sub">
                                <a href="{{ route('admin.student.list') }}">
                                    <i class="fas fa-user"></i>
                                    <span class="bot-line"></span>Students</a>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-sun-o"></i>
                                    <span class="bot-line"></span>Meal</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="{{ route('admin.meal.menu') }}">Menu</a>
                                    </li>
                                    <li>
                                        <a href="badge.html">Booked Meal</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        @elseif (Auth::user()->user_type == 2)
                        <li class="has-sub">
                                <a href="{{ route('student.dashboard') }}">
                                    <i class="fas fa-list"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li class="has-sub">
                                <a href="{{ route('student.menu') }}">
                                    <i class="fas fa-caret-square-o-down"></i>Menu
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-tachometer-alt"></i>Book Meal
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                        @endif
                    
                    </div>
 
                            
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                            
                                <div class="content">
                                    <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="{{ route('logout') }}">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->