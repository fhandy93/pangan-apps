<!--APP-SIDEBAR-->
<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
        <div class="app-sidebar ">
            <div class="side-header">
                <a class="header-brand1" href="/home">
                    <img src="{{ asset('vendor/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
                    <img src="{{ asset('vendor/images/brand/logo-1.png')}}" class="header-brand-img toggle-logo"
                        alt="logo">
                    <img src="{{ asset('vendor/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
                    <img src="{{ asset('vendor/images/brand/logo-3.png')}}" class="header-brand-img light-logo1"
                        alt="logo">
                </a>
                <!-- LOGO -->
            </div>
            <div class="main-sidemenu">
                <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                        fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                    </svg></div>
                    @if(Auth::user()->id == 225 )
                <ul class="side-menu">
                    <li class="sub-category">
                        <h3>Main</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="/home"><i
                                class="side-menu__icon fe fe-home"></i><span
                                class="side-menu__label">Dashboard</span></a>
                    </li>
                  
                </ul>
                @else
                <ul class="side-menu">
                    <li class="sub-category">
                        <h3>Main</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="/home"><i
                                class="side-menu__icon fe fe-home"></i><span
                                class="side-menu__label">Dashboard</span></a>
                    </li>
                    <li class="sub-category">
                        <h3>User menu</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="/userl"><i
                            class="side-menu__icon fa fa-users"></i><span
                            class="side-menu__label">User List</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="/contoh-form"><i
                            class="side-menu__icon fa fa-file-text-o"></i><span
                            class="side-menu__label">Form Sample</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="/element-form"><i
                            class="side-menu__icon fa fa-file-text-o"></i><span
                            class="side-menu__label">Form elements</span>
                        </a>
                    </li>
                </ul>
                @endif
                <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                    </svg></div>
            </div>
        </div>
        <!--/APP-SIDEBAR-->
    </div>
</div>