<div class="site-menubar-body">
  <div>
    <div>
      <ul class="site-menu" data-plugin="menu">
        <li class="site-menu-item {{ request()->is('instructor-dashboard') ? 'active' : '' }}">
            <a href="{{ route('instructor.dashboard') }}">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Dashboard</span>
            </a>
        </li>
        <li class="site-menu-item {{ request()->is('instructor-profile') ? 'active' : '' }}">
            <a href="{{ route('instructor.profile.get') }}">
                <i class="site-menu-icon fas fa-user" aria-hidden="true"></i>
                <span class="site-menu-title">Profile</span>
            </a>
        </li>
        <li class="site-menu-item {{ request()->is('instructor-course-*') ? 'active' : '' }}">
            <a href="{{ route('instructor.course.list') }}">
                <i class="site-menu-icon fas fa-chalkboard" aria-hidden="true"></i>
                <span class="site-menu-title">Courses</span>
            </a>
        </li>
        <li class="site-menu-item {{ request()->is('appointment*') ? 'active' : '' }}">
            <a href="{{ route('appointments') }}">
                <i class="site-menu-icon wb-tag" aria-hidden="true"></i>
                <span class="site-menu-title">Appointments</span>
            </a>
        </li>
        <li class="site-menu-item {{ request()->is('instructor-schedule') ? 'active' : '' }}">
            <a href="{{ route('instructor.schedule') }}">
                <i class="site-menu-icon wb-tag" aria-hidden="true"></i>
                <span class="site-menu-title">Availability</span>
            </a>
        </li>
        <li class="site-menu-item {{ request()->is('messages*') ? 'active' : '' }}">
            <a href="{{ url('/messages') }}">
                <i class="site-menu-icon fas fa-comment-dots" aria-hidden="true"></i>
                <span class="site-menu-title">Messages</span>
            </a>
        </li>
        
<!-- 
        <li class="site-menu-item {{ request()->is('instructor-credits') ? 'active' : '' }}">
            <a href="{{ route('instructor.credits') }}">
                <i class="site-menu-icon fas fa-hand-holding-usd" aria-hidden="true"></i>
                <span class="site-menu-title">Credits</span>
            </a>
        </li>
         -->
        <li class="site-menu-item {{ request()->is('instructor-transactions') ? 'active' : '' }}">
            <a href="{{ route('instructor.transactions') }}">
                <i class="site-menu-icon fas fa-money-bill" aria-hidden="true"></i>
                <span class="site-menu-title">Transactions</span>
            </a>
        </li>
        <!-- <li class="site-menu-item {{ request()->is('instructor-withdraw-requests') ? 'active' : '' }}">
            <a href="{{ route('instructor.list.withdraw') }}">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Withdraw Requests</span>
            </a>
        </li> -->
      </ul>

      
    </div>
  </div>
</div>