<body>
    <div class="container-scroller">
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="/welcome"><img src="/assets/images/logo.svg" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="/welcome"><img src="/assets/images/logo-mini.svg"
                        alt="logo" /></a>
            </div>

            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <div class="search-field d-none d-xl-block">
                    @yield('navbar')
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                            <i class="input-group-text border-0 mdi mdi-magnify"></i>
                        </div>
                        <input type="text" class="form-control bg-transparent border-0" placeholder="Search"
                            name="search" value="{{ request('search') }}">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-inverse-primary" type="submit">Search</button>
                        </span>
                    </div>
                    </form>
                </div>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-language d-none d-md-block mr-1">
                        <div class="nav-link">
                            <div class="nav-language-text">
                                <p class="my-1 text-black">{{ auth()->user()->nama }}</p>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item nav-profile mr-3">
                        <div class="nav-link" id="profileDropdown" aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="/assets/images/faces-clipart/pic-4.png" alt="image">
                            </div>
                            <div class="nav-profile-text">
                                <p class="my-1 text-black">{{ auth()->user()->email }}</p>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <button type="button" class="btn" data-toggle="modal" data-target="#logoutModal">
                            <i class="mdi mdi-exit-to-app text-danger" style="font-size:25px !important;"></i>
                        </button>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
