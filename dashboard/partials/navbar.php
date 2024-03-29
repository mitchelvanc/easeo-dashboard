<nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark">
    <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
            <div class="sidebar-brand-text mx-3"><span>EASEO.nl</span></div> <!-- logo -->
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item"><a class="nav-link active" href="index-admin.php"><i class="fas fa-tachometer-alt"></i><span>&nbsp;Dashboard</span></a></li>
            <li class="nav-item">
                <div><a class="btn btn-link nav-link" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button"><i class="fas fa-cog"></i>&nbsp;<span>settings</span></a>
                    <div class="collapse" id="collapse-1">
                        <div class="bg-white border rounded py-2 collapse-inner">
                            <h6 class="collapse-header">Settings options:</h6><a class="collapse-item" href="profile-admin.php">Profiel</a><a class="collapse-item" href="profile-admin.php">Gegevens</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div><a class="btn btn-link nav-link" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" href="#collapse-2" role="button"><i class="fas fa-bookmark"></i>&nbsp;<span>bibliotheek</span></a>
                    <div class="collapse" id="collapse-2">
                        <div class="bg-white border rounded py-2 collapse-inner">
                            <h6 class="collapse-header">CUSTOM UTILITIES:</h6><a class="collapse-item" href="utilities-color.html">Colors</a><a class="collapse-item" href="utilities-border.html">Borders</a><a class="collapse-item" href="utilities-animation.html">Animations</a><a class="collapse-item" href="utilities-other.html">Other</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div><a class="btn btn-link nav-link" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapse-3" href="#collapse-3" role="button"><i class="fas fa-folder"></i>&nbsp;<span>Menukaarten</span></a>
                    <div class="collapse" id="collapse-3">
                        <div class="bg-white border rounded py-2 collapse-inner">
                            <h6 class="collapse-header">Menukaarten</h6><a class="collapse-item" href="login.html">Overzicht</a><a class="collapse-item" href="register.html">toevoegen</a>
                        </div>
                    </div>
                </div>
                <div id="collapsePages" class="collapse" aria-labelledby="headingTwo" aria-controls="collapsePages" data-bs-parent="#accordionSidebar">
                    <div class="bg-white border rounded py-2 collapse-inner">
                        <h6 class="collapse-header">LOGIN SCREENS:</h6><a class="collapse-item" href="#">Login</a><a class="collapse-item" href="#">Register</a><a class="collapse-item" href="#">Forgot Password</a>
                        <h6 class="collapse-header">OTHER PAGES:</h6><a class="collapse-item" href="#">404 Page</a><a class="collapse-item" href="#">Blank Page</a>
                    </div>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="charts.html"><i class="fas fa-chart-area"></i><span>&nbsp;Stats</span></a></li>
            <li class="nav-item"><a class="nav-link" href="tables.html"><i class="fas fa-question-circle"></i><span>&nbsp;Help</span></a></li>
            <hr class="sidebar-divider">
        </ul>
        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
    </div>
</nav>
<div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
        <nav class="navbar navbar-expand bg-white shadow mb-4 topbar static-top navbar-light">
            <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                <ul class="navbar-nav flex-nowrap ms-auto">
                    <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                        <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="me-auto navbar-search w-100">
                                <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                    <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <div class="d-none d-sm-block topbar-divider"></div>
                    <li class="nav-item dropdown no-arrow">
                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small"><?php echo $_SESSION['admin_name'] ?></span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                            <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="../index.html"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>