@if(Auth::guard('web')->check())
    <p class="text-success">Welcome<strong>&nbsp{{ Auth::user()->name }}</strong>
    </p>
@else
    <p class="text-danger">You are logged out as<strong>User</strong>
    </p>
@endif


@if(Auth::guard('admin')->check())
    <p class="text-success">Welcome<strong>&nbsp{{ Auth::user()->name }}</strong>
    </p>
@else
    <p class="text-danger">You are logged out as<strong>Admin</strong>
    </p>
@endif 