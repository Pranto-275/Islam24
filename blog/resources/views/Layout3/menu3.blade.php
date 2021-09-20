<div id="main-wrapper">
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <div class="navbar-collapse">
                <ul class="navbar-nav mr-auto mt-md-0">
                    <li class="nav-item "> <a class="nav-link nav-toggler  hidden-md-up  waves-effect waves-dark" href="javascript:void(0)"><i class="fas  fa-bars"></i></a></li>
                    <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="fas fa-bars"></i></a> </li>
                 <li class="nav-item mt-3">@yield('username')</li>
                </ul>
                <ul class="navbar-nav my-lg-0">
                    <li class="nav-item"><a href="{{url('/userlogout')}}" class="btn btn-sm btn-danger">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>
   <aside class="left-sidebar">
        <div class="scroll-sidebar">
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-devider mt-0" style="margin-bottom: 5px"></li>
                        <li> <a href="{{ url('/userpanel') }}"><span> <i class="fas fa-home"></i> </span><span class="hide-menu">Dashboard</span></a></li>
                        <li> <a href="{{ url('/userprofile') }}"><span> <i class="fas fa-users"></i> </span><span class="hide-menu">Profile</span></a></li>
                        <li> <a href="{{ url('/userquestion') }}"><span> <i class="fas fa-globe"></i> </span><span class="hide-menu">Questions</span></a></li>
                        <li> <a href="{{ url('/useranswers') }}"><span> <i class="fas fa-book-open"></i> </span><span class="hide-menu">Answers</span></a></li>
                        <li> <a href="{{ url('/usercimam') }}"><span> <i class="fas fa-code"></i></i> </span><span class="hide-menu">Choose Imam</span></a></li>


                </ul>
            </nav>
        </div>
    </aside>
<div class="page-wrapper">
