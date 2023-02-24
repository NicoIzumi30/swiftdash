<body>
    <div id="root">
        <div id="nav" class="nav-container d-flex">
            <div class="nav-content d-flex">
                <!-- Logo Start -->
                <div class="logo position-relative">
                    <a href="Dashboards.Default.html">
                        <!-- Logo can be added directly -->
                        <!-- <img src="<?= base_url() ?>assets/img/logo/logo-white.svg" alt="logo" /> -->

                        <!-- Or added via css to provide different ones for different color themes -->
                        <div class="img"></div>
                    </a>
                </div>
                <!-- Logo End -->

                <!-- User Menu Start -->
                <div class="user-container d-flex">
                    <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img class="profile" alt="profile" src="<?= base_url() ?>assets/img/profile/profile-9.jpg" />
                        <div class="name">Lisa Jackson</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end user-menu wide">
                        <div class="row ms-0 me-0">
                            <div class="col-12 ps-1 mb-2">
                                <div class="text-extra-small text-primary">ACCOUNT</div>
                            </div>
                            <div class="col-6 ps-1 pe-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">User Info</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 pe-1 ps-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">Security</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mb-1 ms-0 me-0">
                            <div class="col-12 p-1 pt-3">
                                <div class="separator-light"></div>
                            </div>
                            <div class="col-6 ps-1 pe-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">
                                            <i data-cs-icon="logout" class="me-2" data-cs-size="17"></i>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#logout"><span
                                                    class="align-middle">Logout</span></a>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Menu End -->

                <!-- Icons Menu Start -->
                <ul class="list-unstyled list-inline text-center menu-icons">
                    <li class="list-inline-item">
                        <a href="#" id="pinButton" class="pin-button">
                            <i data-cs-icon="lock-on" class="unpin" data-cs-size="18"></i>
                            <i data-cs-icon="lock-off" class="pin" data-cs-size="18"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" id="colorButton">
                            <i data-cs-icon="light-on" class="light" data-cs-size="18"></i>
                            <i data-cs-icon="light-off" class="dark" data-cs-size="18"></i>
                        </a>
                    </li>
                </ul>
                <!-- Icons Menu End -->

                <!-- Menu Start -->
                <div class="menu-container flex-grow-1">
                    <ul id="menu" class="menu">
                        <li>
                            <a href="#dashboards" data-href="Dashboards.html">
                                <i class="fa-solid fa-house" style="margin:0px 3px 2px 0px"></i>
                                <span class="label">Dashboards</span>
                            </a>
                            <ul id="dashboards">
                                <li>
                                    <a href="<?= base_url('dashboard') ?>">
                                        <span class="label">Data Dashboard</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#mm" data-href="Dashboards.html">
                                <i class="fa-solid fa-bars" style="margin:0px 3px 2px 0px"></i>
                                <span class="label">Menu</span>
                            </a>
                            <ul id="mm">
                                <li>
                                    <a href="<?= base_url('menu') ?>">
                                        <span class="label">Menu Management</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('menu/submenu') ?>">
                                        <span class="label">Submenu Management</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Menu End -->

                <!-- Mobile Buttons Start -->
                <div class="mobile-buttons-container">
                    <!-- Scrollspy Mobile Button Start -->
                    <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
                        <i data-cs-icon="menu-dropdown"></i>
                    </a>
                    <!-- Scrollspy Mobile Button End -->

                    <!-- Scrollspy Mobile Dropdown Start -->
                    <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
                    <!-- Scrollspy Mobile Dropdown End -->

                    <!-- Menu Button Start -->
                    <a href="#" id="mobileMenuButton" class="menu-button">
                        <i data-cs-icon="menu"></i>
                    </a>
                    <!-- Menu Button End -->
                </div>
                <!-- Mobile Buttons End -->
            </div>
            <div class="nav-shadow"></div>
        </div>