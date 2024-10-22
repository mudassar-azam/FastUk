
<nav style="background: #AA1818;background: rgb(170, 24, 24);margin: 12px 0px 0px 8px;border-radius: 10px; min-height: calc(99vh - 80px); box-shadow: 10px 10px 20px 0px rgba(0, 0, 0, 0.3);"
    class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile not-navigation-link">
            <div class="nav-link">
                <div class="user-wrapper">
                    <div class="profile-image">
                        <img src="{{ asset('public/authuserimage/1702116036_User_icon_2.svg.png' . auth()->user()->image) }}"
                            alt="profile image">
                    </div>
                    <div class="text-wrapper">
                        <p style="color:white;" class="profile-name">{{ ucwords(Auth::user()->name) }}</p>
                        <div class="dropdown" data-display="static">
                            <a href="#" class="nav-link d-flex user-switch-dropdown-toggler"
                                id="UsersettingsDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                <small class="designation text-muted">online</small>
                                <span class="status-indicator online"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="UsersettingsDropdown">
                                <a class="dropdown-item p-0">
                                    <div class="d-flex border-bottom">
                                        <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                            <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                                        </div>
                                        <div
                                            class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                                            <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                                        </div>
                                        <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                            <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                                        </div>
                                    </div>
                                </a>
                                {{--                <a class="dropdown-item mt-2"> Manage Accounts </a> --}}
                                {{--                <a class="dropdown-item"> Change Password </a> --}}
                                {{--                <a class="dropdown-item"> Check Inbox </a> --}}
                                {{--                <a class="dropdown-item"> Sign Out </a> --}}

                            </div>
                        </div>
                    </div>
                </div>

                <button style="background: rgb(193 28 28);border: none;" class="btn btn-success btn-block addbalnce">Add
                    Balance<i class="mdi mdi-plus"></i>
                </button>
                <a style="background: rgb(193 28 28);border: none;" href="{{ url('/') }}"
                    class="btn btn-success btn-block ">New Booking
                </a>
                <button style="background: rgb(193 28 28);border: none;"
                    class="btn btn-success btn-block addbalnce">Approved Credit {{ -Auth::user()->credit_limit }}</i>
                </button>
            </div>
        </li>
        <hr style="width: 90%;border-top: 1px solid white;">
        <li style="margin: 0em 1em;" class="nav-item hoverside {{ active_class(['/']) }}">
            <a style="transition: 0.3s ease !important;border-radius: 0.5em !important;" class="nav-link"
                href="{{ url('/home') }}">
                <i class="menu-icon mdi mdi-television"></i>
                <span style="color: white;" class="menu-title">Dashboard</span>
            </a>
        </li>
        <hr style="width: 90%;border-top: 1px solid white;">
        <li style="margin: 0em 1em;" class="nav-item hoverside {{ active_class(['user/bookings']) }}">
            <a style="transition: 0.3s ease !important;border-radius: 0.5em !important;" class="nav-link"
                href="{{ url('/user/bookings') }}">
                <i class="menu-icon mdi mdi-book-multiple"></i>
                <span style="color: white;" class="menu-title">Bookings</span>
            </a>
        </li>
        <hr style="width: 90%;border-top: 1px solid white;">
        <li class="nav-item"
            style="display: flex;background: rgb(193 28 28);justify-content:center;align-items:center;padding:2rem 0;font-weight:600;flex-direction:column;margin:15px 30px;border-radius:50%;box-shadow: rgba(0, 0, 0, 0.2) 5px 5px 15px 0px;">
            <div class="float-left">
                <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
            <div style="display:flex;flex-direction:column;text-align:center;">
                <div style="color: white;" class="menu-title">Remaining Balance &nbsp;</div>
                <div style="color: white;" class="menu-title">£{{ $userdata->balance }}</div>
            </div>
        </li>
    
    </ul>
</nav>
