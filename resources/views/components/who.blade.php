@if(Auth::guard('web')->check())

    <p>
        You are logged in as a <strong>User</strong>
    </p>
@else
    you are logged out as a user

@endif

@if(Auth::guard('admin')->check())

    <p>
        You are logged in as a <strong>Admin</strong>
    </p>
@else
    you are logged out as a admin

@endif