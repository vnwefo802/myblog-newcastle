<!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">


                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">


                            <li class="nav-item dropdown dropdown-large">

                                <div class="dropdown-menu dropdown-menu-end">

                                    <div class="header-notifications-list">


                                    <div class="header-message-list">

                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('admin_dashboard_assets/images/avatars/avatar-2.png') }}" class="user-img" alt="user avatar">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0">{{ Auth::user()->name }}</p>
                                <p class="designattion mb-0">{{ Auth::user()->email }}</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item"  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
                                               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->
