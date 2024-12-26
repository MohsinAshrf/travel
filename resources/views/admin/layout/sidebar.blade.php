
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="fas fa-tachometer-alt icon"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#destinationsMenu" class="nav-link d-flex align-items-center" data-bs-toggle="collapse">
                            <i class="fas fa-map-marker-alt icon"></i>
                            Destinations
                            <i class="fas fa-chevron-right dropdown-icon"></i>
                        </a>
                        <ul class="collapse list-unstyled ps-3" id="destinationsMenu">
                            <li><a href="#" class="nav-link">Europe</a></li>
                            <li><a href="#" class="nav-link">Asia</a></li>
                            <li><a href="#" class="nav-link">America</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#usersMenu" class="nav-link d-flex align-items-center" data-bs-toggle="collapse">
                            <i class="fas fa-users icon"></i>
                            Users
                            <i class="fas fa-chevron-right dropdown-icon"></i>
                        </a>
                        <ul class="collapse list-unstyled ps-3" id="usersMenu">
                            <li><a href="{{route('users.create')}}" class="nav-link">Add Users</a></li>
                            <li><a href="{{route('users.index')}}" class="nav-link">Users List</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#visitersMenu" class="nav-link d-flex align-items-center" data-bs-toggle="collapse">
                            <i class="fas fa-users icon"></i>
                            Visitors
                            <i class="fas fa-chevron-right dropdown-icon"></i>
                        </a>
                        <ul class="collapse list-unstyled ps-3" id="visitersMenu">
                            {{-- <li><a href="{{route('users.create')}}" class="nav-link">Add Users</a></li> --}}
                            <li><a href="{{route('contacts.index')}}" class="nav-link">Visitors  List</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#bookingMenu" class="nav-link d-flex align-items-center" data-bs-toggle="collapse">
                            <i class="fas fa-users icon"></i>
                            Bookings
                            <i class="fas fa-chevron-right dropdown-icon"></i>
                        </a>
                        <ul class="collapse list-unstyled ps-3" id="bookingMenu">
                            {{-- <li><a href="{{route('users.create')}}" class="nav-link">Add Users</a></li> --}}
                            <li><a href="{{route('book.index')}}" class="nav-link">Bookings Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#pakagesMenu" class="nav-link d-flex align-items-center" data-bs-toggle="collapse">
                            <i class="fas fa-users icon"></i>
                            Pakages
                            <i class="fas fa-chevron-right dropdown-icon"></i>
                        </a>
                        <ul class="collapse list-unstyled ps-3" id="pakagesMenu">
                            <li><a href="{{route('pkgs.create')}}" class="nav-link">Add Pakage</a></li>
                            <li><a href="{{route('pkgs.index')}}" class="nav-link">Pakages List</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#feedbackMenu" class="nav-link d-flex align-items-center" data-bs-toggle="collapse">
                            <i class="fas fa-users icon"></i>
                            Feedback
                            <i class="fas fa-chevron-right dropdown-icon"></i>
                        </a>
                        <ul class="collapse list-unstyled ps-3" id="feedbackMenu">
                            <li><a href="{{route('feedbacks.create')}}" class="nav-link">Add Feedback</a></li>
                            <li><a href="{{route('feedbacks.index')}}" class="nav-link">Feedback List</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
