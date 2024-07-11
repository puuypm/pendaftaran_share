<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
        <a href="{{url('user/dashboard')}}" class="logo">
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
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <ul class="nav nav-secondary">
          <li class="nav-item active">
            <a
              data-bs-toggle="collapse"
              href="#dashboard"
              class="collapsed"
              aria-expanded="false"
            >
              <i class="fas fa-home"></i>
              <p>Dashboard</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="dashboard">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{url('user/dashboard')}}">
                    <span class="sub-item">Dashboard 1</span>
                  </a>
                </li>
              </ul>
            </div>
            <li class="nav-item">
              <a href="{{url('user/index')}}">
              <i class="fas fa-pen-square"></i>
              <p>Participant</p>
            </a>
            </li>
            <li class="nav-item">
              <a href="{{url('user/settings/index')}}">
              <i class="fas fa-layer-group"></i>
              <p>Riwayat Participant</p>
            </a>
            </li>
          </li>
        </ul>
      </div>
    </div>
  </div>