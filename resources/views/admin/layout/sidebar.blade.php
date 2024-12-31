
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block sidebar " id="selfSidebar">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="{{route('dashboard')}}" class="nav-link fs-5 active">
                            <i class="fas fa-tachometer-alt icon"></i>
                            Dashboard
                        </a>
                    </li>
                    {{-- <li class="nav-item mt-3">
                        <a href="#destinationsMenu" class=" d-flex align-items-center" data-bs-toggle="collapse">
                            <i class="fas fa-map-marker-alt icon"></i>
                            Destinations
                            <i class="fas fa-chevron-right dropdown-icon"></i>
                        </a>
                        <ul class="collapse list-unstyled ps-3" id="destinationsMenu">
                            <li><a href="#" >Europe</a></li>
                            <li><a href="#" >Asia</a></li>
                            <li><a href="#" >America</a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item">
                        <a href="#usersMenu" class=" d-flex align-items-center" data-bs-toggle="collapse">
                            <i class="fas fa-users icon"></i>
                            Users
                            <i class="fas fa-chevron-right dropdown-icon"></i>
                        </a>
                        <ul class="collapse list-unstyled ps-3" id="usersMenu">
                            <li><a href="{{route('users.create')}}" >Add Users</a></li>
                            <li><a href="{{route('users.index')}}" >Users List</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#visitersMenu" class=" d-flex align-items-center" data-bs-toggle="collapse">
                            <i class="fas fa-paper-plane icon"></i>
                            Visitors
                            <i class="fas fa-chevron-right dropdown-icon"></i>
                        </a>
                        <ul class="collapse list-unstyled ps-3" id="visitersMenu">
                            {{-- <li><a href="{{route('users.create')}}" class="nav-link">Add Users</a></li> --}}
                            <li><a href="{{route('contacts.index')}}" >Visitors List</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#bookingMenu" class=" d-flex align-items-center" data-bs-toggle="collapse">
                            <i class="fas fa-receipt icon"></i>
                            Bookings
                            <i class="fas fa-chevron-right dropdown-icon"></i>
                        </a>
                        <ul class="collapse list-unstyled ps-3" id="bookingMenu">
                            {{-- <li><a href="{{route('users.create')}}" class="nav-link">Add Users</a></li> --}}
                            <li><a href="{{route('book.index')}}" >Bookings List</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#pakagesMenu" class=" d-flex align-items-center" data-bs-toggle="collapse">
                            <i class="fas fa-box icon"></i>
                            Pakages
                            <i class="fas fa-chevron-right dropdown-icon"></i>
                        </a>
                        <ul class="collapse list-unstyled ps-3" id="pakagesMenu">
                            <li><a href="{{route('pkgs.create')}}" >Add Pakage</a></li>
                            <li><a href="{{route('pkgs.index')}}" >Pakages List</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#feedbackMenu" class=" d-flex align-items-center" data-bs-toggle="collapse">
                            <i class="fas fa-comments icon"></i>
                            Feedback
                            <i class="fas fa-chevron-right dropdown-icon"></i>
                        </a>
                        <ul class="collapse list-unstyled ps-3" id="feedbackMenu">
                            <li><a href="{{route('feedbacks.create')}}" >Add Feedback</a></li>
                            <li><a href="{{route('feedbacks.index')}}" >Feedback List</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
