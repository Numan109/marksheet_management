<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                @php
                $name = "Numan";
                @endphp
                <a href="#" class="d-block">{{$name}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Widgets
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Student
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('add_student')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Student</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('view_student_info')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Student</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{url('add-category')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add catagory</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('view-category')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Catagory</p>
                            </a>


                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Layout Options
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('assets/pages/layout/top-nav.html')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('assets/pages/layout/top-nav-sidebar.html')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation + Sidebar</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('assets/pages/layout/collapsed-sidebar.html')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Collapsed Sidebar</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="pages/calendar.html" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Calendar
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Pages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/examples/invoice.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Invoice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/profile.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/e-commerce.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>E-commerce</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/projects.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Projects</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/project-add.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Add</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/project-edit.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Edit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/project-detail.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Detail</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/contacts.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contacts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/faq.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>FAQ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/contact-us.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact us</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Extras
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Login & Register
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('admin-login')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Login </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/register.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Register</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/forgot-password.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Forgot Password </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/recover-password.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Recover Password </p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-search"></i>
                        <p>
                            Search
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/search/simple.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Simple Search</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>