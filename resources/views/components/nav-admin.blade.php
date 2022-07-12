<!-- Navbar web -->
<div class="col-md-3 col-xl-2 px-sm-2 px-0 bg-light d-none d-md-block">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <img class="w-auto mt-4" src="/assets/images/Logo.png" alt="">
        <ul class="nav flex-column mt-4 mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
                <a href="#" class="nav-link align-middle px-0">
                    <span class="ms-1 d-none d-sm-inline text-black">Program</span>
                </a>
            </li>
            <li>
                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                    <span class="ms-1 d-none d-sm-inline text-black">Dashboard</span> </a>
                    <ul class="collapse show nav ms-2 text-black" id="submenu1" data-bs-parent="#menu">
                        <li class="w-100">
                            <a href="#" class="nav-link px-0 text-black"> <span class="d-none text-black d-sm-inline">Item</span> 1 </a>
                        </li>
                        <li class="w-100">
                            <a href="#" class="nav-link px-0 text-black"> <span class="d-none text-black d-sm-inline">Item</span> 1 </a>
                        </li>
                    </ul>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link align-middle px-0">
                    <span class="ms-1 d-none d-sm-inline text-black">Other</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Navbar mobile -->
<div class="d-block d-md-none">
    <nav class="navbar fixed-top bg-white navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <i class="bi bi-list"></i>
            </button>
            <div class="offcanvas offcanvas-start w-50" tabindex="1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-body">
                    <ul class="nav align-items-start flex-column mt-2 mb-sm-auto mb-0 align-items-start" id="menu">
                        <a href="#" class="nav-link">
                            <span class="text-black">Program</span>
                        </a>
                        <a href="#" class="nav-link">
                            <span class="text-black">Program</span>
                        </a>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link">
                            <span class="text-black">Dashboard</span> </a>
                            <ul class="collapse show nav ms-2 text-black" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link text-black"> <span class="text-black">Item</span> 1 </a>
                                </li>
                                <li class="w-100">
                                    <a href="#" class="nav-link text-black"> <span class="text-black">Item</span> 1 </a>
                                </li>
                            </ul>
                        </a>
                    </ul>
                </div>
            </div>
            <a class="navbar-brand" href="#">
                <img src="/assets/images/logo.png" alt="">
            </a>
            <div class="d-flex user-logged">
                <a href="#">
                    <img src="/assets/images/user_photo.png" class="user-photo" alt="">
                </a>
            </div>
        </div>
    </nav>
</div>
<!-- end spacer -->