<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background: rgb(170, 24, 24);width: 99%;margin: 5px 6px;border-radius: 10px; box-shadow: 10px 10px 20px 0px rgba(0, 0, 0, 0.3); z-index: 9999;">


  <div style="background: #AA1818; border-radius: 1em 0 0 1em;" class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">

    <a class="navbar-brand brand-logo" href="{{ url('/') }}">

     <img src="{{ url('images/flogo.png') }}" class="custom-logo" alt="Logo"

        style="width:90px;height:auto;" /> </a>

    <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}">

      <img src="{{ url('assets/images/logo-mini.svg') }}" alt="logo" /> </a>

  </div>

  <div style="background: #AA1818; border-radius:  0 1em 1em 0;" class="navbar-menu-wrapper d-flex align-items-center justify-content-end">


      <li class="nav-item dropdown d-none d-xl-inline-block">

        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">

          <span class="profile-text d-none d-md-inline-flex">{{ucwords(Auth::user()->name)}}</span>

          <img class="img-xs rounded-circle" src="{{ asset('authuserimage/1702116036_User_icon_2.svg.png' . auth()->user()->image) }}" alt="Profile image"> </a>

        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">

          <a class="dropdown-item p-0">

            <div class="d-flex border-bottom w-100 justify-content-center">

              <div class="py-3 px-4 d-flex align-items-center justify-content-center">

                <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>

              </div>

              <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">

                <i class="mdi mdi-account-outline mr-0 text-gray"></i>

              </div>

              <div class="py-3 px-4 d-flex align-items-center justify-content-center">

                <i class="mdi mdi-alarm-check mr-0 text-gray"></i>

              </div>

            </div>

          </a>

          <a class="dropdown-item mt-2" href="{{url('user/profile')}}"> Manage Accounts </a>

          <a class="dropdown-item" href="{{url('user/edit-profile')}}"> Edit Profile </a>

          <a class="dropdown-item" href="{{url('user/edit-password')}}"> Change Password </a>

          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Sign Out </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

                @csrf

            </form>

        </div>

      </li>

    </ul>

    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">

      <span class="mdi mdi-menu icon-menu"></span>

    </button>

  </div>

</nav>

