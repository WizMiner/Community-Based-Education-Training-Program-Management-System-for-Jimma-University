<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">CBE Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/dist/img/user.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()?->email ?? 'Name Here' }}</a>
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
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('cbe.home') }}" class="nav-link {{ (request()->is('samplelink')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item {{ (request()->is('ssamplelink*')) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ (request()->is('samplelink*')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-sitemap"></i>
                        <p>
                            Departments
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('cbe.department.create') }}" class="nav-link {{ (request()->is('samplelink')) ? 'active' : '' }}">
                                <i class="fas fa-caret-right nav-icon"></i>
                                <p>Add Department</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('cbe.department.list') }}" class="nav-link {{ (request()->is('samplelink') || request()->is('school/department/view*') || request()->is('school/department/edit*')) ? 'active' : '' }}">
                                <i class="fas fa-caret-right nav-icon"></i>
                                <p>Departments List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ (request()->is('cbe/students*')) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ (request()->is('cbe/students*')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-graduation-cap"></i>
                        <p>
                            Students
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('cbe.students.list') }}" class="nav-link {{ (request()->is('cbe/students/list')) || (request()->is('cbe/students/list*')) ? 'active' : '' }}">
                                <i class="fas fa-caret-right nav-icon"></i>
                                <p>Students List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('cbe.student-training.list') }}" class="nav-link {{ (request()->is('cbe/students/trainings/list') || request()->is('cbe/students/trainings*')) ? 'active' : '' }}">
                                <i class="fas fa-caret-right nav-icon"></i>
                                <p>Trainings</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ (request()->is('cbe/assessment*')) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ (request()->is('cbe/assessment*')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Assessments
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('cbe.assessment.supervisor.index') }}" class="nav-link {{ (request()->is('cbe/assessment/supervisor*')) ? 'active' : '' }}">
                                <i class="fas fa-caret-right nav-icon"></i>
                                <p>Supervisor Assessment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('cbe.assessment.institution.index') }}" class="nav-link {{ (request()->is('cbe/assessment/institution*')) ? 'active' : '' }}">
                                <i class="fas fa-caret-right nav-icon"></i>
                                <p>Institution Assessment</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cbe.questionnaire.view') }}" class="nav-link {{ (request()->is('cbe/questionnaire*')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>Questionnaire</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cbe.notice-board.index') }}" class="nav-link {{ (request()->is('cbe/notice-board*')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>Notice Board</p>
                    </a>
                </li>
                <li class="nav-item {{ (request()->is('cbe/setting*')) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ (request()->is('cbe/setting*')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-wrench"></i>
                        <p>
                            Setting
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('cbe.training-type.list') }}" class="nav-link {{ (request()->is('cbe/setting/training-types*')) ? 'active' : '' }}">
                                <i class="fas fa-caret-right nav-icon"></i>
                                <p>Training Types</p>
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
