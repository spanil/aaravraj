<!doctype html>
<html lang="en">
  <!--begin::Head-->
@include('admin.partials.head_sec')
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
    @include('admin.partials.header_sec')
      <!--begin::Sidebar-->
     @include('admin.partials.sidebar_sec')
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
             @yield('content')
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
       @include('admin.partials.footer_sec')
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
   @include('admin.partials.js_scripts')
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
