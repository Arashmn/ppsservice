<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/" class="app-brand-link">
            <span class="app-brand-logo demo">
                <div class="d-flex flex-center ">
                    <a href="#">
                        <img src="{{ asset('assets/panel/img/favicon/favicon.png') }}" class="max-h-75px" alt=""
                            style="margin-right: -28px">
                    </a>
                </div>
            </span>
            <small class="app-brand-text text-muted text-center ms-2">@lang('public.menu.management')</small>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
            <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-divider mt-0"></div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item ">
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Page 1">@lang('public.menu.dashboard')</div>
            </a>
        </li>
        <!-- users -->
        <li class="menu-item {{ isActive(['admin.admins.users.index'])}}">
            <a href="" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Page 2">@lang('public.menu.user.person')</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item  {{ isActiveSubMenu(['admin.admins.users.index'])}} ">
                    <a href="{{ route('users.index') }}" class="menu-link">
                        <div data-i18n="Analytics">@lang('public.menu.user.Employee')</div>
                    </a>
                </li>

                <li class="menu-item  ">
                    <a href="/" class="menu-link">
                        <div data-i18n="Analytics">@lang('public.menu.user.role')</div>
                    </a>
                </li>
                {{-- {{ isActiveSubMenu([ 'admin.users.create' ])}} --}}
                <li class="menu-item  ">
                    <a href="/" class="menu-link ">
                        <div data-i18n="eCommerce">@lang('public.menu.user.permission')</div>
                    </a>
                </li>
            </ul>
            {{-- {{ isActive(['admin.permissions.index', 'admin.permissions.create' ])}} --}}

            <!-- services -->
        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bxs-factory'></i>
                <div data-i18n="Roles & Permissions">@lang('public.menu.service.centers&&content')</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="/" class="menu-link">
                        <div data-i18n="Roles">@lang('public.menu.service.center car')</div>
                    </a>
                </li>
                {{-- {{ isActiveSubMenu([ 'admin.permissions.index' ])}} --}}
                <li class="menu-item ">
                    <a href="/" class="menu-link">
                        <div data-i18n="Permission">@lang('public.menu.service.center home')</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- agent -->
        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-male"></i>
                <div data-i18n="Roles & Permissions">@lang('public.menu.agent.agent')</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="/" class="menu-link">
                        <div data-i18n="Roles">@lang('public.menu.agent.save agent')</div>
                    </a>
                </li>
                {{-- {{ isActiveSubMenu([ 'admin.permissions.index' ])}} --}}
                <li class="menu-item ">
                    <a href="/" class="menu-link">
                        <div data-i18n="Permission">@lang('public.menu.agent.all agent')</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- marketers -->
        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">

                <i class="menu-icon tf-icons bx bx-group""></i>
                <div data-i18n="Roles & Permissions">@lang('public.menu.marketer.marketers')</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="/" class="menu-link">
                        <div data-i18n="Roles">@lang('public.menu.marketer.save marketer')</div>
                    </a>
                </li>
                {{-- {{ isActiveSubMenu([ 'admin.permissions.index' ])}} --}}
                <li class="menu-item ">
                    <a href="/" class="menu-link">
                        <div data-i18n="Permission">@lang('public.menu.marketer.all marketer')</div>
                    </a>
                </li>
            </ul>
        </li>

         <!-- branch -->
         <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-store""></i>
                <div data-i18n="Roles & Permissions">@lang('public.menu.branch.branchs')</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="/" class="menu-link">
                        <div data-i18n="Roles">@lang('public.menu.branch.save branch')</div>
                    </a>
                </li>
                {{-- {{ isActiveSubMenu([ 'admin.permissions.index' ])}} --}}
                <li class="menu-item ">
                    <a href="/" class="menu-link">
                        <div data-i18n="Permission">@lang('public.menu.branch.all branch')</div>
                    </a>
                </li>
            </ul>
        </li>

        <!--dsadad-->

        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bx-bar-chart-alt-2' ></i>
                                <div data-i18n="Roles & Permissions">@lang('public.menu.census.census')</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="/" class="menu-link">
                        <div data-i18n="Roles">@lang('public.menu.census.count members')</div>
                    </a>
                </li>
                {{-- {{ isActiveSubMenu([ 'admin.permissions.index' ])}} --}}
                <li class="menu-item ">
                    <a href="/" class="menu-link">
                        <div data-i18n="Permission">@lang('public.menu.census.count marketers')</div>
                    </a>
                </li>

            </ul>
        </li>


        <li class="menu-item ">
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx  bx-car"></i>
                <div data-i18n="Page 1">@lang('public.menu.record accident')</div>
            </a>
        </li>


    </ul>
</aside>
