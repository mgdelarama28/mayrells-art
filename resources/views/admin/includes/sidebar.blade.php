<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link bg-primary d-flex justify-content-center">
        {{-- <img src="dist/img/AdminLTELogo.png" alt="#" class="brand-image img-circle elevation-3"
        style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel my-3 pb-3 d-flex justify-content-center">
            <div class="image">
                <img src="{{ Auth::user()->renderProfilePicture() }}" class="img-circle elevation-2" alt="User Image">
            </div>

            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->renderFullName() }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('admin.account_settings') }}" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Account Settings
                        </p>
                    </a>
                </li>
                
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Models<i class="right fas fa-angle-left"></i></p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.categories.index') }}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.drawings.index') }}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Drawings</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.messages.index') }}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Messages</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-shield-alt"></i>
                        <p>Access Control<i class="right fas fa-angle-left"></i></p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.admins.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-users-cog"></i>
                                <p>Admins</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.roles.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-id-card"></i>
                                <p>Roles</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.permissions.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-pencil-alt"></i>
                                <p>Permissions</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.activity_logs') }}" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Activity Logs
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>