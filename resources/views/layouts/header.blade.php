<header>
        <div class="header-part">
            <div class="content-wrapper">
                <div class="header-left">
                    <div class="logo">
                        <a href="{{url('/')}}">
                        <img src="img/hstu_logo_.png" alt="" class="logo-image">
                        </a>
                    </div>
                    <a href="{{url('/')}}">
                    <h3><span class="hstu">CSE</span>ALUMNI</h3>
                    </a>
                </div>
                <div class="header-right">
                    <nav>
                        <ul>
                            <li><a href="{{url('/about-us')}}">About Us</a></li>
                            <li><a href="{{url('/events')}}">Events</a></li>
                            <li><a href="{{url('/news')}}">News</a></li>
                            <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                            <li><a href="{{url('/sponsor')}}">Sponsors & Donors</a></li>
                            @if(session()->has('name'))
                            <li><a href="{{url('/gallery')}}">Gallery</a></li>
                            <li><a href="{{url('/members')}}">Members</a></li>
                            <li><a href="{{url('/jobs')}}">Jobs</a></li>
                            <li><a href="{{url('/job-post-member')}}">Submit Post</a></li>
                            <li><a href="{{url('/logout-member')}}">Logout</a></li>
                            @else
                            <li><a href="{{url('login')}}">Login</a></li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>