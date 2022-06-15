<!--start header -->

@php

$showAdmin = false;
$showallpost = false;
$showcreateposts = false;
$showcreateposts = false;
$showallcategories = false;
$show_categories_index = false;
$show_categories_create = false;
$showcomments = false;
$showcomments_index = false;
$show_comments_create = false;
$show_users_index = false;
$show_users_create = false;
$show_roles_index = false;
$show_roles_create = false;
$showcontacts = false;
$showVolunteer = false;
$show_setting_edit = false;
$show_donate_edit  = false;
$show_home_edit  = false;
$show_footer_edit  = false;
$showtag  = false;

if (Auth::check()) {
    $roles = auth()
        ->user()
        ->role->permissions->toArray();

    foreach ($roles as $role) {
        if ($role['name'] == 'admin.index') {
            $showAdmin = true;
         }
         else if ($role['name'] == 'admin.posts.index') {
            $showallpost   = true;
        }

        else if ($role['name'] == 'admin.posts.create') {
            $showcreateposts   = true;
        }

        else if ($role['name'] == 'admin.categories.index') {
            $showallcategories   = true;
        }

        else if ($role['name'] == 'admin.categories.create') {
            $show_categories_create   = true;
        }

          else if ($role['name'] == 'admin.comments') {
            $showcomments = true;
        }

        else if ($role['name'] == 'admin.comments.index') {
            $showcomments_index = true;
        }

        else if ($role['name'] == 'admin.comments.create') {
            $show_comments_create = true;
        }

        else if ($role['name'] == 'admin.users.index') {
            $show_users_index = true;
        }

        else if ($role['name'] == 'admin.users.create') {
            $show_users_create = true;
        }

        else if ($role['name'] == 'admin.roles.index') {
            $show_roles_index = true;
        }

        else if ($role['name'] == 'admin.roles.create') {
            $show_roles_create = true;
        }

         else if ($role['name'] == 'admin.contacts') {
            $showcontacts = true;
        }

        else if ($role['name'] == 'admin.volunteer') {
            $showVolunteer = true;
        }

        else if ($role['name'] == 'admin.setting.edit') {
            $show_setting_edit = true;
        }

        else if ($role['name'] == 'admin.donate') {
            $show_donate_edit  = true;
        }

         else if ($role['name'] == 'admin.home.edit') {
            $show_home_edit   = true;
        }

        else if ($role['name'] == 'admin.footer.edit') {
            $show_footer_edit   = true;
        }

        else if ($role['name'] == 'admin.tags.index') {
            $showtag   = true;
        }


    }

    }
@endphp
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

                            <li> @if (Auth::check() && $showAdmin)
                                <a href="{{ route('admin.index') }}"><button type="button"
                                    class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                                    id="menu-item-5">Admin</button></a>
                            @endif
                            @if (Auth::check() && $showcontacts)
                            <a href="{{ route('admin.contacts') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                         id="menu-item-5">Contacts</a>
                         @endif
                         {{-- Contacts --}}

                         {{-- volunteer --}}
                         @if (Auth::check() && $showVolunteer)
                         <a href="{{ route('admin.volunteer') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                         id="menu-item-5">volunteer</a>
                         @endif
                         {{-- volunteer --}}

                            {{-- setting --}}
                            @if (Auth::check() && $show_setting_edit)
                            <a href="{{ route('admin.setting.edit') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                         id="menu-item-5">About</a>
                         @endif
                         {{-- setting --}}

                              {{-- Donate --}}
                              @if (Auth::check() && $show_donate_edit)
                              <a href="{{ route('admin.donate.edit') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                          id="menu-item-5">Donate</a>
                          @endif
                          {{-- Donate --}}

                           {{-- Home --}}
                           @if (Auth::check() && $show_home_edit)
                           <a href="{{ route('admin.home.edit') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                         id="menu-item-5">Home</a>
                         @endif
                         {{-- Home --}}

                          {{-- Footer --}}
                          @if (Auth::check() && $show_footer_edit)
                          <a href="{{ route('admin.footer.edit') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                         id="menu-item-5">Footer</a>
                         @endif
                         {{-- Footer --}}





                                             @if (Auth::check() && $showtag)
                                                             <a href="{{ route('admin.tags.index') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                                                                 id="menu-item-3">Tags</a>
                                             @endif

                        </li>
                        <div class="py-1" role="none">
                            {{-- All Comments --}}
                        @if (Auth::check() && $showcomments_index)
                            <a href="{{ route('admin.comments.index') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                                id="menu-item-4">All Comments</a>
                        @endif
                        {{-- All Comments ends--}}

                        {{-- Add New Comment --}}
                        @if (Auth::check() && $show_comments_create)

                            <a href="{{ route('admin.comments.create') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                                id="menu-item-5">Add New Comments</a>
                        @endif
                        {{-- Add New Comment ends --}}



                         {{-- post --}}
                         @if (Auth::check() && $showallpost)
                         <a href="{{ route('admin.posts.index') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                             id="menu-item-5">All Posts</a>
                        @endif


                        @if (Auth::check() && $showcreateposts)
                             <a href="{{ route('admin.posts.create') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                             id="menu-item-5">Add New Post</a>
                        @endif
                         {{-- post --}}


                                                            {{-- All Roles --}}
                                                @if (Auth::check() && $show_roles_index)
                                                            <a href="{{ route('admin.roles.index') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                                                                id="menu-item-4">All Roles</a>
                                        @endif
                                        {{-- All Roles ends--}}

                                        {{-- Create New Roles --}}
                                        @if (Auth::check() && $show_roles_create)
                                                            <a href="{{ route('admin.roles.create') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                                                                id="menu-item-5">Add New Role</a>
                                                @endif
                                                {{-- Create New Role ends --}}
                                                {{-- Role ends --}}

                        {{-- Categories --}}
                                                @if (Auth::check() && $showallcategories)
                                                <a href="{{ route('admin.categories.index') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                                                    id="menu-item-5">All Categories</a>
                                                    @endif


                                                    @if (Auth::check() && $show_categories_create)
                                                    <a href="{{ route('admin.categories.create') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                                                    id="menu-item-5">Add New Categories</a>
                                    @endif
                        {{-- Categories --}}


                        {{-- user --}}
                                    @if (Auth::check() && $show_users_index)
                                    <a href="{{ route('admin.users.index') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                                    id="menu-item-5">All Users</a>
                                    @endif


                                    @if (Auth::check() && $show_users_create)
                                    <a href="{{ route('admin.users.create') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                                    id="menu-item-5">Add New Users</a>
                                    @endif
                                    {{-- user --}}

                                                        </div>

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
