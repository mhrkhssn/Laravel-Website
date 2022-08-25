<div class="dsy-aside dsy-aside-fixed">
    <div class="dsy-aside-brand">
        <div class="dsy-brand-logo">
            <b>
                <a href="" class="main-logo" style="font-size: 20px ;color: #eca520">
                    Admin Panel
                </a>
            </b>
            <b>
                <a href="" class="logo-icon" style="font-size: 10px ;color: #eca520">
                    Admin Panel
                </a>
            </b>
        </div>
    </div>
    <div class="dsy-aside-menu-wrapper">
        <div class="dsy-aside-menu">
            <ul class="dsy-aside-nav sidebar-toggle-view">
                <li class="dsy-menu-label">
                    <div class="dsy-menu-label-text">MENU</div>
                </li>
                <li class="dsy-menu-item sidebar-nav-item  @if(Request::route()->getName()=="admin.dashboard") active @endif">
                    <a href="{!! route('admin.dashboard') !!}" class="dsy-menu-link"> <span
                            class="dsy-menu-link-icon">  <i
                                class="flaticon-null-1"></i>  </span>
                        <span class="dsy-menu-link-text">Dashboard</span>
                    </a>
                </li>
                @if (Gate::allows('permission'))
                    <li class="dsy-menu-item sidebar-nav-item @if(Request::segment(2)=="permissions") active  @endif">
                        <a href="#" class="dsy-menu-link"> <span class="dsy-menu-link-icon"> <i
                                    class="flaticon-null-7"></i> </span>
                            <span class="dsy-menu-link-text"> Permissions</span>
                            <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                        </a>

                        <ul class="dsy-sub-group sub-group-menu"
                            @if(Request::segment(2)=="permissions") style="display: block;" @endif>
                            @if (Gate::allows('permission'))
                                <li class="dsy-nav-item @if(Request::route()->getName()=="admin.permissions.index" ) active @endif">
                                    <a href="{!! route('admin.permissions.index') !!}"
                                       class="dsy-menu-link ">Permissions</a>
                                </li>
                            @endif
                            @if (Gate::allows('permission_create'))
                                <li class="dsy-nav-item"
                                    @if(Request::route()->getName()=="admin.permissions.create" ) active @endif>
                                    <a href="{!! route('admin.permissions.create') !!}" class="dsy-menu-link">Permissions
                                        Create</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif
                @if (Gate::allows('role'))
                    <li class="dsy-menu-item sidebar-nav-item @if(Request::segment(2)=="roles") active  @endif">
                        <a href="#" class="dsy-menu-link"> <span class="dsy-menu-link-icon"> <i
                                    class="flaticon-null-7"></i> </span>
                            <span class="dsy-menu-link-text"> Roles</span>
                            <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                        </a>
                        <ul class="dsy-sub-group sub-group-menu"
                            @if(Request::segment(2)=="roles") style="display: block;" @endif>
                            @if (Gate::allows('role'))
                                <li class="dsy-nav-item @if(Request::route()->getName()=="admin.roles.index" ) active @endif">
                                    <a href="{!! route('admin.roles.index') !!}" class="dsy-menu-link ">Roles</a>
                                </li>
                            @endif
                            @if (Gate::allows('role_create'))
                                <li class="dsy-nav-item @if(Request::route()->getName()=="admin.roles.create" ) active @endif">
                                    <a href="{!! route('admin.roles.create') !!}" class="dsy-menu-link">Role
                                        Create</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif
                @if (Gate::allows('service'))
                    <li class="dsy-menu-item sidebar-nav-item @if(Request::segment(2)=="service") active  @endif">
                        <a href="#" class="dsy-menu-link"> <span class="dsy-menu-link-icon"> <i
                                    class="flaticon-null-7"></i> </span>
                            <span class="dsy-menu-link-text"> Services </span>
                            <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                        </a>
                        <ul class="dsy-sub-group sub-group-menu"
                            @if(Request::segment(2)=="service") style="display: block;" @endif>
                            @if (Gate::allows('service'))
                                <li class="dsy-nav-item @if(Request::route()->getName()=="admin.categorys.index" ) active @endif">
                                    <a href="{!! route('admin.categorys.index') !!}" class="dsy-menu-link ">Services</a>
                                </li>
                            @endif
                            @if (Gate::allows('service_create'))
                                <li class="dsy-nav-item @if(Request::route()->getName()=="admin.categorys.create" ) active @endif">
                                    <a href="{!! route('admin.categorys.create') !!}" class="dsy-menu-link">Service
                                        Create</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif
                @if (Gate::allows('project'))
                    <li class="dsy-menu-item sidebar-nav-item @if(Request::segment(2)=="project") active  @endif">
                        <a href="#" class="dsy-menu-link"> <span class="dsy-menu-link-icon"> <i
                                    class="flaticon-null-7"></i> </span>
                            <span class="dsy-menu-link-text"> Projects </span>
                            <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                        </a>
                        <ul class="dsy-sub-group sub-group-menu"
                            @if(Request::segment(2)=="project") style="display: block;" @endif>
                            @if (Gate::allows('project'))
                                <li class="dsy-nav-item @if(Request::route()->getName()=="admin.sub_categorys.index" ) active @endif">
                                    <a href="{!! route('admin.sub_categorys.index') !!}" class="dsy-menu-link ">
                                        Projects</a>
                                </li>
                            @endif
                            @if (Gate::allows('project_create'))
                                <li class="dsy-nav-item @if(Request::route()->getName()=="admin.sub_categorys.create" ) active @endif">
                                    <a href="{!! route('admin.sub_categorys.create') !!}" class="dsy-menu-link"> Project
                                        Create</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif
                @if (Gate::allows('blog'))
                    <li class="dsy-menu-item sidebar-nav-item @if(Request::segment(2)=="blog") active  @endif">
                        <a href="#" class="dsy-menu-link"> <span class="dsy-menu-link-icon"> <i
                                    class="flaticon-null-7"></i> </span>
                            <span class="dsy-menu-link-text"> Blogs </span>
                            <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                        </a>
                        <ul class="dsy-sub-group sub-group-menu"
                            @if(Request::segment(2)=="blog") style="display: block;" @endif>
                            @if (Gate::allows('blog'))
                                <li class="dsy-nav-item @if(Request::route()->getName()=="admin.blogs.index" ) active @endif">
                                    <a href="{!! route('admin.blogs.index') !!}" class="dsy-menu-link ">Blogs</a>
                                </li>
                            @endif
                            @if (Gate::allows('blog_create'))
                                <li class="dsy-nav-item @if(Request::route()->getName()=="admin.blogs.create" ) active @endif">
                                    <a href="{!! route('admin.blogs.create') !!}" class="dsy-menu-link">Blog
                                        Create</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif
                @if (Gate::allows('post'))
                    <li class="dsy-menu-item sidebar-nav-item @if(Request::segment(2)=="post") active  @endif">
                        <a href="#" class="dsy-menu-link"> <span class="dsy-menu-link-icon"> <i
                                    class="flaticon-null-7"></i> </span>
                            <span class="dsy-menu-link-text">Posts</span>
                            <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                        </a>
                        <ul class="dsy-sub-group sub-group-menu"
                            @if(Request::segment(2)=="post") style="display: block;" @endif>
                            @if (Gate::allows('post'))
                                <li class="dsy-nav-item @if(Request::route()->getName()=="admin.posts.index" ) active @endif">
                                    <a href="{!! route('admin.posts.index') !!}" class="dsy-menu-link "> Posts</a>
                                </li>
                            @endif
                            @if (Gate::allows('post_create'))
                                <li class="dsy-nav-item @if(Request::route()->getName()=="admin.posts.create" ) active @endif">
                                    <a href="{!! route('admin.posts.create') !!}" class="dsy-menu-link"> Post
                                        Create</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif
                @if (Gate::allows('team_member'))
                    <li class="dsy-menu-item sidebar-nav-item @if(Request::segment(2)=="team_member") active  @endif">
                        <a href="#" class="dsy-menu-link"> <span class="dsy-menu-link-icon"> <i
                                    class="flaticon-null-7"></i> </span>
                            <span class="dsy-menu-link-text">Team</span>
                            <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                        </a>
                        <ul class="dsy-sub-group sub-group-menu"
                            @if(Request::segment(2)=="team_member") style="display: block;" @endif>
                            @if (Gate::allows('team_member'))
                                <li class="dsy-nav-item @if(Request::route()->getName()=="admin.news.index" ) active @endif">
                                    <a href="{!! route('admin.news.index') !!}" class="dsy-menu-link "> Team</a>
                                </li>
                            @endif
                            @if (Gate::allows('team_member_create'))
                                <li class="dsy-nav-item @if(Request::route()->getName()=="admin.news.create" ) active @endif">
                                    <a href="{!! route('admin.news.create') !!}" class="dsy-menu-link"> Team Member
                                        Create</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif
                @if (Gate::allows('email'))
                    <li class="dsy-menu-item sidebar-nav-item @if(Request::segment(2)=="email") active  @endif">
                        <a href="#" class="dsy-menu-link"> <span class="dsy-menu-link-icon"> <i
                                    class="flaticon-null-7"></i> </span>
                            <span class="dsy-menu-link-text">Contact Emails</span>
                            <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                        </a>
                        <ul class="dsy-sub-group sub-group-menu"
                            @if(Request::segment(2)=="email") style="display: block;" @endif>
                            @if (Gate::allows('email'))
                                <li class="dsy-nav-item @if(Request::route()->getName()=="admin.books.index" ) active @endif">
                                    <a href="{!! route('admin.books.index') !!}" class="dsy-menu-link "> Contact
                                        Emails</a>
                                </li>
                            @endif
                            @if (Gate::allows('email_create'))
                                <li class="dsy-nav-item @if(Request::route()->getName()=="admin.books.create" ) active @endif">
                                    <a href="{!! route('admin.books.create') !!}" class="dsy-menu-link"> Email
                                        Add</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif
                {{--                <li class="dsy-menu-item sidebar-nav-item @if(Request::segment(2)=="galleries") active  @endif">--}}
                {{--                    <a href="#" class="dsy-menu-link"> <span class="dsy-menu-link-icon"> <i class="flaticon-null-7"></i> </span>--}}
                {{--                        <span class="dsy-menu-link-text">Galleries</span>--}}
                {{--                        <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>--}}
                {{--                    </a>--}}
                {{--                    <ul class="dsy-sub-group sub-group-menu"--}}
                {{--                        @if(Request::segment(2)=="galleries") style="display: block;" @endif>--}}
                {{--                        <li class="dsy-nav-item @if(Request::route()->getName()=="admin.galleries.index" ) active @endif">--}}
                {{--                            <a href="{!! route('admin.galleries.index') !!}" class="dsy-menu-link "> Galleries</a>--}}
                {{--                        </li>--}}
                {{--                        <li class="dsy-nav-item @if(Request::route()->getName()=="admin.books.create" ) active @endif">--}}
                {{--                            <a href="{!! route('admin.galleries.create') !!}" class="dsy-menu-link"> Gallery--}}
                {{--                                Create</a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
                @if (Gate::allows('users'))
                    <li class="dsy-menu-item sidebar-nav-item @if(Request::segment(2)=="users") active  @endif">
                        <a href="#" class="dsy-menu-link"> <span class="dsy-menu-link-icon"> <i
                                    class="flaticon-null-7"></i> </span>
                            <span class="dsy-menu-link-text">Users</span>
                            <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                        </a>
                        <ul class="dsy-sub-group sub-group-menu"
                            @if(Request::segment(2)=="users") style="display: block;" @endif>
                            @if (Gate::allows('users'))
                                <li class="dsy-nav-item @if(Request::route()->getName()=="admin.users.index" ) active @endif">
                                    <a href="{!! route('admin.users.index') !!}" class="dsy-menu-link "> Users</a>
                                </li>
                            @endif
                            @if (Gate::allows('users_create'))
                                <li class="dsy-nav-item @if(Request::route()->getName()=="admin.users.create" ) active @endif">
                                    <a href="{!! route('admin.users.create') !!}" class="dsy-menu-link"> User
                                        Create</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif
                {{--                <li class="dsy-menu-item sidebar-nav-item @if(Request::segment(2)=="pages") active  @endif">--}}
                {{--                    <a href="#" class="dsy-menu-link"> <span class="dsy-menu-link-icon"> <i class="flaticon-null-7"></i> </span>--}}
                {{--                        <span class="dsy-menu-link-text">Pages</span>--}}
                {{--                        <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>--}}
                {{--                    </a>--}}
                {{--                    <ul class="dsy-sub-group sub-group-menu"--}}
                {{--                        @if(Request::segment(2)=="users") style="display: block;" @endif>--}}
                {{--                        <li class="dsy-nav-item @if(Request::route()->getName()=="admin.pages.index" ) active @endif">--}}
                {{--                            <a href="{!! route('admin.pages.index') !!}" class="dsy-menu-link "> Pages</a>--}}
                {{--                        </li>--}}
                {{--                        <li class="dsy-nav-item @if(Request::route()->getName()=="admin.pages.create" ) active @endif">--}}
                {{--                            <a href="{!! route('admin.pages.create') !!}" class="dsy-menu-link"> Pages--}}
                {{--                                Create</a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
                {{--                <li class="dsy-menu-item sidebar-nav-item @if(Request::segment(2)=="settings") active  @endif">--}}
                {{--                    <a href="#" class="dsy-menu-link"> <span class="dsy-menu-link-icon"> <i class="flaticon-null-7"></i> </span>--}}
                {{--                        <span class="dsy-menu-link-text">Settings</span>--}}
                {{--                        <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>--}}
                {{--                    </a>--}}
                {{--                    <ul class="dsy-sub-group sub-group-menu"--}}
                {{--                        @if(Request::segment(2)=="settings") style="display: block;" @endif>--}}
                {{--                        <li class="dsy-nav-item @if(Request::route()->getName()=="admin.settings.index" ) active @endif">--}}
                {{--                            <a href="{!! route('admin.settings.index') !!}" class="dsy-menu-link "> Settings</a>--}}
                {{--                        </li>--}}
                {{--                        <li class="dsy-nav-item @if(Request::route()->getName()=="admin.settings.create" ) active @endif">--}}
                {{--                            <a href="{!! route('admin.settings.create') !!}" class="dsy-menu-link"> Settings--}}
                {{--                                Create</a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
            </ul>
        </div>
    </div>
</div>
