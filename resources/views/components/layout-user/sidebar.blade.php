@props(["directories"])

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
        @foreach ($directories as $directory)
        <li class="nav-item">
            <a href="#" class="nav-link" aria-current="page">
                {{$directory->name }}
            </a>
        </li>
        @endforeach
        <li>
            <a class="nav-link" href="#">
                Graph view
            </a>
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
