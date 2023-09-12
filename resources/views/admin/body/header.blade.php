@php
    $id =\Illuminate\Support\Facades\Auth::user()->id;
    $adminData = \App\Models\User::find($id);

@endphp
<div class="navbar-custom">
    <div class="topbar">
        <div class="topbar-menu d-flex align-items-center gap-1">

            <!-- Topbar Brand Logo -->
            <div class="logo-box">
                <!-- Brand Logo Light -->
                <a href="" class="logo-light">
                    <img src="{{ asset('admin/assets/images/logo-light.png') }}" alt="logo" class="logo-lg">
                    <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="small logo" class="logo-sm">
                </a>

                <!-- Brand Logo Dark -->
                <a href="index.html" class="logo-dark">
                    <img src="{{ asset('admin/assets/images/logo-dark.png') }}" alt="dark logo" class="logo-lg">
                    <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="small logo" class="logo-sm">
                </a>
            </div>

            <!-- Sidebar Menu Toggle Button -->
            <button class="button-toggle-menu">
                <i class="mdi mdi-menu"></i>
            </button>

            <!-- Dropdown Menu -->


            <!-- Mega Menu Dropdown -->
            <div class="dropdown dropdown-mega d-none d-xl-block">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    Mega Menu
                    <i class="mdi mdi-chevron-down  ms-1"></i>
                </a>
                <div class="dropdown-menu dropdown-megamenu">
                    <div class="row">
                        <div class="col-sm-8">

                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="text-dark mt-0">UI Components</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="">Widgets</a>
                                        </li>
                                        <li>
                                            <a href="">Nestable List</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Range Sliders</a>
                                        </li>
                                        <li>
                                            <a href="pages-gallery.html">Masonry Items</a>
                                        </li>
                                        <li>
                                            <a href="extended-sweet-alert.html">Sweet Alerts</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Treeview Page</a>
                                        </li>
                                        <li>
                                            <a href="extended-tour.html">Tour Page</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="text-dark mt-0">Applications</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="ecommerce-products.html">eCommerce Pages</a>
                                        </li>
                                        <li>
                                            <a href="crm-dashboard.html">CRM Pages</a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.html">Email</a>
                                        </li>
                                        <li>
                                            <a href="apps-calendar.html">Calendar</a>
                                        </li>
                                        <li>
                                            <a href="contacts-list.html">Team Contacts</a>
                                        </li>
                                        <li>
                                            <a href="task-kanban-board.html">Task Board</a>
                                        </li>
                                        <li>
                                            <a href="email-templates.html">Email Templates</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="text-dark mt-0">Extra Pages</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Left Sidebar with User</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Menu Collapsed</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Small Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">New Header Style</a>
                                        </li>
                                        <li>
                                            <a href="pages-search-results.html">Search Result</a>
                                        </li>
                                        <li>
                                            <a href="pages-gallery.html">Gallery Pages</a>
                                        </li>
                                        <li>
                                            <a href="pages-coming-soon.html">Maintenance & Coming Soon</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-center mt-3">
                                <h3 class="text-dark">Special Discount Sale!</h3>
                                <h4>Save up to 70% off.</h4>
                                <a href="https://1.envato.market/uboldadmin" target="_blank" class="btn btn-primary rounded-pill mt-3">Download Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="topbar-menu d-flex align-items-center">


            <!-- Fullscreen Button -->
            <li class="d-none d-md-inline-block">
                <a class="nav-link waves-effect waves-light" href="" data-toggle="fullscreen">
                    <i class="fe-maximize font-22"></i>
                </a>
            </li>

            <!-- Search Dropdown (for Mobile/Tablet) -->
            <li class="dropdown d-lg-none">
                <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="ri-search-line font-22"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                    <form class="p-3">
                        <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    </form>
                </div>
            </li>

            <!-- App Dropdown -->


            <!-- Language flag dropdown  -->


            <!-- Notofication dropdown -->
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-bell font-22"></i>
                    <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                    <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0 font-16 fw-semibold"> Notification</h6>
                            </div>
                            <div class="col-auto">
                                <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                    <small>Clear All</small>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="px-1" style="max-height: 300px;" data-simplebar>

                        <h5 class="text-muted font-13 fw-normal mt-2">Today</h5>
                        <!-- item-->

                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-1">
                            <div class="card-body">
                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold font-14">Datacorp <small class="fw-normal text-muted ms-1">1 min ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                            <div class="card-body">
                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-account-plus"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold font-14">Admin <small class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">New user registered</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <h5 class="text-muted font-13 fw-normal mt-0">Yesterday</h5>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                            <div class="card-body">
                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon">
                                            <img src="{{ asset('admin/assets/images/users/avatar-2.jpg') }}" class="img-fluid rounded-circle" alt="" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold font-14">Cristina Pride <small class="fw-normal text-muted ms-1">1 day ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <h5 class="text-muted font-13 fw-normal mt-0">30 Dec 2021</h5>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                            <div class="card-body">
                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold font-14">Datacorp</h5>
                                        <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                            <div class="card-body">
                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon">
                                            <img src="{{ asset('admin/assets/images/users/avatar-4.jpg') }}" class="img-fluid rounded-circle" alt="" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold font-14">Karen Robinson</h5>
                                        <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome design</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="text-center">
                            <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                        </div>
                    </div>

                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                        View All
                    </a>

                </div>
            </li>

            <!-- Light/Dark Mode Toggle Button -->
            <li class="d-none d-sm-inline-block">
                <div class="nav-link waves-effect waves-light" id="light-dark-mode">
                    <i class="ri-moon-line font-22"></i>
                </div>
            </li>

            <!-- User Dropdown -->
            <li class="dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ (!empty($adminData->photo))? url('upload/adminImages/'.$adminData->photo):url('upload/no_image.jpg') }}" alt="user-image" class="rounded-circle">
                    <span class="ms-1 d-none d-md-inline-block">
                                        {{$adminData->name}}
                        <i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="{{ route('admin.profile') }}" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock"></i>
                        <span>Lock Screen</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="{{ route('admin.logout') }}" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </li>

            <!-- Right Bar offcanvas button (Theme Customization Panel) -->

        </ul>
    </div>
</div>
