<div class="mx-2 my-2">

    <!-- User info -->
    <div class="flex-shrink-0 dropdown">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/interneto.png" alt="mdo" class="rounded-circle" width="32" height="32">
            <span>{{ auth()->user()->name }}</span>
        </a>
        <ul class="dropdown-menu text-small shadow">
            <!-- <li><a class="dropdown-item" href="#">Settings</a></li> -->
            <!-- <li><a class="dropdown-item" href="#">Profile</a></li> -->
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>

        </ul>
    </div>
    <hr>

    <!-- Collections -->
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
                All bookmarks
            </a>
        </li>
        <li>
            <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                Unsorted
            </a>
        </li>
        <li>
            <a class="nav-link" href="#">
                Trash
            </a>
        </li>
        <li>
            <a class="nav-link" href="#">
                Graph view
            </a>
        </li>
    </ul>

    <ul class="list-unstyled ps-0">
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                Home
            </button>
            <div class="collapse" id="home-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-dark rounded">Overview</a></li>
                    <li><a href="#" class="link-dark rounded">Updates</a></li>
                    <li><a href="#" class="link-dark rounded">Reports</a></li>
                </ul>
            </div>
        </li>
    </ul>

    <!-- Tags -->
    <div class="tags">
        Tags
    </div>

    <!-- Types -->
    <!--
        <div class="types">
            <div class="audios">
                Audios
            </div>
            <div class="documents">
                Documents
            </div>
            <div class="images">
                Images
            </div>
            <div class="videos">
                Videos
            </div>
        </div>
    -->


</div>
