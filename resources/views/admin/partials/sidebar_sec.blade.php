 <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="{{asset('admins/dist/assets/img/AdminLTELogo.png')}}"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">AdminLTE 4</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >

 @foreach($sidebarMenus as $sidebarMenu)
    @php 
        $childRoutes = $sidebarMenu->children->pluck('menu_controller')->toArray();
        $isParentActive = false;

        foreach ($childRoutes as $route) {
            // Match admin.roles.*, admin.users.*, etc.
            $routePrefix = Str::beforeLast($route, '.'); // removes ".index"
            if (request()->routeIs($routePrefix . '.*')) {
                $isParentActive = true;
                break;
            }
        }
    @endphp

    <li class="nav-item {{ $isParentActive ? 'menu-open' : '' }}">
        <a href="#" class="nav-link {{ $isParentActive ? 'active' : '' }}">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>{{ $sidebarMenu->menu_name }}
                <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
        </a>

        @if($sidebarMenu->children->isNotEmpty())
            <ul class="nav nav-treeview">
                @foreach($sidebarMenu->children as $sidebarchildMenu)
                    @php
                        $routePrefix = Str::beforeLast($sidebarchildMenu->menu_controller, '.');
                        $isActive = request()->routeIs($routePrefix . '.*');
                    @endphp
                    <li class="nav-item">
                        <a href="{{ route($sidebarchildMenu->menu_controller) }}" class="nav-link {{ $isActive ? 'active' : '' }}">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>{{ $sidebarchildMenu->menu_name }}</p>
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </li>
@endforeach
              
             
            </ul>