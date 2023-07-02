<div class="dropdown d-flex">
    <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i
            class="fa fa-user"></i></a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
        <a class="dropdown-item" href="page-profile.html"><i class="dropdown-icon fe fe-user"></i> Profile</a>
        <a class="dropdown-item" href="app-setting.html"><i class="dropdown-icon fe fe-settings"></i> Settings</a>
        <a class="dropdown-item" href="app-email.html"><span class="float-right"><span
                    class="badge badge-primary">6</span></span><i class="dropdown-icon fe fe-mail"></i> Inbox</a>
        <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-send"></i> Message</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-help-circle"></i> Need
            help?</a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="dropdown-item"><i class="dropdown-icon fe fe-log-out"></i> Sign
                out</button>
        </form>
    </div>
</div>
