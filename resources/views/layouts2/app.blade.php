<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - {{Str::ucfirst(Auth::user()->usertype)}}</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    {{-- CSS --}}
    @include('layouts2/inc2/css')
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
        @if (Auth::user()->usertype == 'admin')
            @include('layouts2/inc2/sidebar')
        @endif
        @if (Auth::user()->usertype == 'user')
        @include('layouts2/inc2/sidebaruser')
        @endif
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.html" class="logo">
                <img
                  src="{{asset('k/assets/img/kaiadmin/logo_light.svg')}}"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          @include('layouts2/inc2/navbar')
          <!-- End Navbar -->
        </div>

        <div class="container">
          <div class="row">
          <div class="page-inner">
            <div class="d-flex align-items-left align-items-md flex-column flex-md-col pt-2 pb-4">
                <h3 class="fw-bold mb-3">@yield('title')</h3>

                <div class="content">
                  @yield('content')
              </div>

          </div>
        </div>

        {{-- FOOTER --}}
        @include('layouts2/inc2/footer')
      </div>

      <!-- Custom template | don't include it in your project! -->
      @include('layouts2/inc2/customTemplate')
      <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    @include('layouts2/inc2/js')
  </body>
</html>

   

