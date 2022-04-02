<div class="dlabnav-scroll">
    <ul class="metismenu" id="menu">
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="la la-book"></i>
                <span class="nav-text">Documents</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('document.index') }}">All Documents</a></li>
                <li><a href="{{ route('document.create') }}">Add Documents</a></li>
            </ul>
        </li>
        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="la la-book"></i>
                <span class="nav-text">Users</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('users') }}">All Users</a></li>
            </ul>
        </li>
    </ul>
</div>
