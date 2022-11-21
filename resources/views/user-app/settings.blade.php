<div class="mx-2 my-2">

    <!-- User info -->
    <div class="flex-shrink-0 dropdown">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle" width="32" height="32">
            <span>{{ auth()->user()->name }}</span>
        </a>
        <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="{{ route('settings') }}">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="{{ route('logout') }}">Log out</a></li>
        </ul>
    </div>

    <div>

    </div>
</div>
