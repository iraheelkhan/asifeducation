<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    {{-- <img src="images/icon/logo.png" alt="Cool Admin"> --}}
                    <strong>ERP Education</strong>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1 ps">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{route('Dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{route('ParticipantList')}}">
                                <i class="fas fa-users"></i>Participants</a>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{route('TrainingList')}}">
                                <i class="fas fa-calendar-week"></i>Trainings</a>
                        </li>
                    </ul>
                </nav>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        </aside>