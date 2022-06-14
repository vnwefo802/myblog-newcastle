<!--sidebar wrapper -->
                @php

                $showAdmin = false;
                // $showPosts = false;
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
                         } // else if ($role['name'] == 'admin.posts') {
                            // $showPosts = true;
                       // }
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

                        else if ($role['name'] == 'admin.tag') {
                            $showtag   = true;
                        } 

                    } 


                    }
            @endphp
            
<div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{ asset('images/NewcastleFoundationLogo.jpg') }}" class="w-28" alt="logo icon">
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    @if (Auth::check() && $showAdmin)
                    <a href="{{ route('admin.index') }}">
                        <div class="parent-icon"><i class='bx bx-home-circle'></i></div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                    @endif
                </li>



            {{-- @if (Auth::check() && $showAdmin)
                <a href="{{ route('admin.index') }}"><button type="button"
                        class="px-2 py-4 text-base font-semibold text-gray-500 transition duration-300 md:text-sm lg:text-lg hover:text-indigo-500"
                        id="bloghl" aria-label="Blog">Admin</button></a>
            @endif --}}















                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                        </div>
                        <div class="menu-title">Posts</div>
                    </a>

                    <ul>
                        <li> <a href="{{ route('admin.posts.index') }}"><i class="bx bx-right-arrow-alt"></i>All Posts</a>
                        </li>
                        <li> <a href="{{ route('admin.posts.create') }}"><i class="bx bx-right-arrow-alt"></i>Add New Post</a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-menu'></i>
                        </div>
                        <div class="menu-title">Categories</div>
                    </a>

                    <ul>
                        <li> <a href="{{ route('admin.categories.index') }}"><i class="bx bx-right-arrow-alt"></i>All Categories</a>
                        </li>
                        <li> <a href="{{ route('admin.categories.create') }}"><i class="bx bx-right-arrow-alt"></i>Add New Category</a>
                        </li>

                    </ul>
                </li>

                <li>
                    @if (Auth::check() && $showtag)

                    <a href="{{ route('admin.tags.index') }}">
                    <div class="parent-icon"><i class='bx bx-purchase-tag'></i></div>
                        <div class="menu-title">Tags</div>
                    </a>
                    @endif

                </li>

                <li>
                    {{-- @if (Auth::check() && $showcomments) --}}
                        
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-comment-dots'></i>
                        </div>
                        <div class="menu-title">Comments</div>
                    </a>
                    {{-- @endif --}}

                    <ul>
                        @if (Auth::check() && $showcomments_index)
                        <li> 
                    <a href="{{ route('admin.comments.index') }}"><i class="bx bx-right-arrow-alt"></i>All Comments</a>
                </li>
                @endif
                @if (Auth::check() && $show_comments_create)
                        <li> 
                            <a href="{{ route('admin.comments.create') }}"><i class="bx bx-right-arrow-alt"></i>Add New Comment</a>
                        </li>
                        @endif

                    </ul>
                </li>

                <hr>

                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-key'></i>
                        </div>
                        <div class="menu-title">Roles</div>
                    </a>

                    <ul>
                        @if (Auth::check() && $show_roles_index)
                        <li> 
                    <a href="{{ route('admin.roles.index') }}"><i class="bx bx-right-arrow-alt"></i>All Roles</a>
                </li>
                @endif
                        <li> 
                    @if (Auth::check() && $show_roles_create)
                            <a href="{{ route('admin.roles.create') }}"><i class="bx bx-right-arrow-alt"></i>Add New Role</a>
                    @endif

                        </li>

                    </ul>
                </li>

                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-user'></i>
                        </div>
                        <div class="menu-title">Users</div>
                    </a>

                    <ul>
                        @if (Auth::check() && $show_users_index)
                        <li> 
                            <a href="{{ route('admin.users.index') }}"><i class="bx bx-right-arrow-alt"></i>All Users</a>
                        </li>
                    @endif
                    @if (Auth::check() && $show_users_create)
                    <li>
                             <a href="{{ route('admin.users.create') }}"><i class="bx bx-right-arrow-alt"></i>Add New User</a>
                            </li>
                    @endif

                    </ul>
                </li>

                @if (Auth::check() && $showcontacts)
                <li>
                    <a href="{{ route('admin.contacts') }}">
                    <div class="parent-icon"><i class='bx bx-mail-send'></i></div>
                        <div class="menu-title">Contacts</div>
                    </a>
                </li>
                @endif

                @if (Auth::check() && $showVolunteer)
                <li>
                    <a href="{{ route('admin.volunteer') }}">
                    <div class="parent-icon"><i class='bx bx-mail-send'></i></div>
                        <div class="menu-title">Volunteer</div>
                    </a>
                </li>
                @endif

                @if (Auth::check() && $show_setting_edit)
                <li>
                    <a href="{{ route('admin.setting.edit') }}">
                    <div class="parent-icon"><i class='bx bx-info-square'></i></div>
                        <div class="menu-title">About</div>
                    </a>
                </li>
                @endif

                @if (Auth::check() && $show_donate_edit)
                <li>
                    <a href="{{ route('admin.donate.edit') }}">
                    <div class="parent-icon"><i class='bx bx-info-square'></i></div>
                        <div class="menu-title">Donate</div>
                    </a>
                </li>
                @endif

                @if (Auth::check() && $show_home_edit)
                <li>
                    <a href="{{ route('admin.home.edit') }}">
                    <div class="parent-icon"><i class='bx bx-info-square'></i></div>
                        <div class="menu-title">Home</div>
                    </a>
                </li>
                @endif

                @if (Auth::check() && $show_footer_edit)
                <li>
                    <a href="{{ route('admin.footer.edit') }}">
                    <div class="parent-icon"><i class='bx bx-info-square'></i></div>
                        <div class="menu-title">Footer</div>
                    </a>
                </li>
                @endif

                <hr>

                <li>
                    <a target='_blank' href="{{ route('home') }}">
                    <div class="parent-icon"><i class='bx bx-pointer'></i></div>
                        <div class="menu-title">Visit Site</div>
                    </a>
                </li>


            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
