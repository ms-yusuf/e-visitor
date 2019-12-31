<div class="sidebar">
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
                <div class="peer peer-greed">
                    <a href="" class="sidebar-link td-n">
                        <div class="peers ai-c fxw-nw">
                            <div class="peer">
                                <div class="logo">
                                    <img src="/assets/static/images/logo.png" alt="" style="width:50px;height:50px;margin-top:10%;margin-left:13%;margin-right:5%">
                                </div>
                            </div>
                            <div class="peer peer-greed">
                                <h5 class="lh-1 mB-0 logo-text">
                                    {{ trans('panel.site_title') }}
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="peer">
                    <div class="mobile-toggle sidebar-toggle">
                        <a href="" class="td-n">
                            <i class="ti-arrow-circle-left"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu scrollable pos-r ps">
            <li class="nav-item mT-30">
                <a href="{{ route("admin.home") }}" class="sidebar-link">
                    <span class="icon-holder">
                        <i class="nav-icon fas fa-fw fa-tachometer-alt"></i>
                    </span>
                    <span class="title">{{ trans('global.dashboard') }}</span>
                </a>
            </li>
            <li class="nav-item">
              <a href="{{ route("admin.kunjungan.index") }}" class="sidebar-link">
                      <span class="icon-holder">
                          <i class="nav-icon fas fa-fw fa-sign-in-alt"></i>
                      </span>
                <span class="title">Kunjungan</span>
              </a>
<!-- <<<<<<< HEAD -->
              <ul class="dropdown-menu">
                  <li>
                    <a href="{{ route("admin.kunjungan.create") }}" class="sidebar-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                      <i class="fa-fw fas fa-route nav-icon"> </i>
                      Kunjungan
                    </a>
                  </li>
                  {{--<li>--}}
                    {{--<a href="{{ route("admin.tracking.index") }}" class="sidebar-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">--}}
                      {{--<i class="fa-fw fas fa-route nav-icon"> </i>--}}
                      {{--Track Pengunjung--}}
                    {{--</a>--}}
                  {{--</li>--}}
                  <li>
                    <a href="{{ route("admin.history.index") }}" class="sidebar-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                      <i class="fa-fw fas fa-history nav-icon"> </i>
                      Riwayat Kunjungan
                    </a>
                  </li>
              </ul>
<!-- =======
>>>>>>>  a3473edd136e9debd2fb730c404945fffcb115b0 -->
            </li>
            {{--<li class="nav-item dropdown">--}}
              {{--<a class="dropdown-toggle" href="#">--}}
                {{--<span class="icon-holder">--}}
                    {{--<i class="fa-fw fas fa-sign-in-alt nav-icon"></i>--}}
                {{--</span>--}}
                {{--<span class="title">Kunjungan</span>--}}
                {{--<span class="arrow">--}}
                    {{--<i class="ti-angle-right"></i>--}}
                {{--</span>--}}
              {{--</a>--}}
              {{--<ul class="dropdown-menu">--}}
                  {{--<li>--}}
                    {{--<a href="{{ route("admin.kunjungan.index") }}" class="sidebar-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">--}}
                      {{--<i class="fa-fw fas fa-route nav-icon"> </i>--}}
                      {{--Kunjungan--}}
                    {{--</a>--}}
                  {{--</li>--}}
                  {{--<li>--}}
                    {{--<a href="{{ route("admin.tracking.index") }}" class="sidebar-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">--}}
                      {{--<i class="fa-fw fas fa-route nav-icon"> </i>--}}
                      {{--Track Pengunjung--}}
                    {{--</a>--}}
                  {{--</li>--}}
                  {{--<li>--}}
                    {{--<a href="{{ route("admin.history.index") }}" class="sidebar-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">--}}
                      {{--<i class="fa-fw fas fa-history nav-icon"> </i>--}}
                      {{--Riwayat Kunjungan--}}
                    {{--</a>--}}
                  {{--</li>--}}
              {{--</ul>--}}
            {{--</li>--}}
            <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="#">
                  <span class="icon-holder">
                      <i class="fa-fw fas fa-database nav-icon"></i>
                  </span>
                <span class="title">Master data</span>
                <span class="arrow">
                      <i class="ti-angle-right"></i>
                  </span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="{{ route("admin.kartu.index") }}" class="sidebar-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-id-card nav-icon"> </i>
                    Kartu Pengunjung
                  </a>
                </li>
                <li>
                  <a href="{{ route("admin.area.index") }}" class="sidebar-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-map-marked nav-icon"> </i>
                    Area
                  </a>
                </li>
                <li>
                  <a href="{{ route("admin.alat.index") }}" class="sidebar-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-hdd nav-icon"> </i>
                    Perangkat
                  </a>
                </li>
                <li>
                  <a href="{{ route("admin.pengunjung.index") }}" class="sidebar-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-users nav-icon"> </i>
                    Pengunjung
                  </a>
                </li>
              </ul>
            </li>
            @can('user_management_access')
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="#">
                        <span class="icon-holder">
                            <i class="fa-fw fas fa-cogs nav-icon"></i>
                        </span>
                        <span class="title">Sistem</span>
                        <span class="arrow">
                            <i class="ti-angle-right"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        @can('permission_access')
                            <li>
                                <a href="{{ route("admin.permissions.index") }}" class="sidebar-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li>
                                <a href="{{ route("admin.roles.index") }}" class="sidebar-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li>
                                <a href="{{ route("admin.users.index") }}" class="sidebar-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('data_utama_access')
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="#">
                        <span class="icon-holder">
                            <i class="fa-fw fas fa-users nav-icon"></i>
                        </span>
                        <span class="title">{{ trans('cruds.manajemenPengguna.title') }}</span>
                        <span class="arrow">
                            <i class="ti-angle-right"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        @can('alat_access')
                            <li>
                                <a href="{{ route("admin.kunjungan.index") }}" class="sidebar-link {{ request()->is('admin/kunjungan') || request()->is('admin/kunjungan/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-plus-circle nav-icon">

                                    </i>
                                    {{ trans('cruds.kunjungan.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('alat_access')
                            <li>
                                <a href="{{ route("admin.areaAkses.index") }}" class="sidebar-link {{ request()->is('admin/areaAkses') || request()->is('admin/areaAkses/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-check-circle nav-icon">

                                    </i>
                                    {{ trans('cruds.akses_area.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('data_utama_access')
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="#">
                        <span class="icon-holder">
                            <i class="fa-fw fas fa-database nav-icon"></i>
                        </span>
                        <span class="title">{{ trans('cruds.dataUtama.title') }}</span>
                        <span class="arrow">
                            <i class="ti-angle-right"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        @can('alat_access')
                            <li>
                                <a href="{{ route("admin.area.index") }}" class="sidebar-link {{ request()->is('admin/area') || request()->is('admin/area/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-building nav-icon">

                                    </i>
                                    {{ trans('cruds.area.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('alat_access')
                            <li>
                                <a href="{{ route("admin.alat.index") }}" class="sidebar-link {{ request()->is('admin/alat') || request()->is('admin/alat/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-microchip nav-icon">

                                    </i>
                                    {{ trans('cruds.alat.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('alat_access')
                            <li>
                                <a href="{{ route("admin.pengunjung.index") }}" class="sidebar-link {{ request()->is('admin/pengunjung') || request()->is('admin/pengunjung/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    {{ trans('cruds.pengunjung.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('alat_access')
                            <li>
                                <a href="{{ route("admin.kartu.index") }}" class="sidebar-link {{ request()->is('admin/kartu') || request()->is('admin/kartu/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-vcard nav-icon">

                                    </i>
                                    {{ trans('cruds.kartu.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <span class="icon-holder">
                        <i class="nav-icon fas fa-fw fa-sign-out-alt"></i>
                    </span>
                    <span class="title">{{ trans('global.logout') }}</span>
                </a>
            </li>
        </ul>

    </div>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
