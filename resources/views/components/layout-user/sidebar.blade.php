@props(["directories"])

<div class="mx-2 my-2">

    <!-- User info -->
    <div class="flex-shrink-0 dropdown">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/interneto.png" alt="mdo" class="rounded-circle" width="32" height="32">
            <span>{{ auth()->user()->name }}</span>
        </a>
        <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                   document.getElementById('logout-form').submit();">
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
            <a href="{{route('bookmarks')}}" class="nav-link active" aria-current="page">
                All bookmarks
            </a>
        </li>
        @foreach ($directories as $directory)
        <li class="nav-item  {{ Request::is('/directories/'.$directory->id) ? 'active' : null }}">
            <a href="{{url('/directories/'.$directory->id)}}" class="nav-link" aria-current="page">
                {{$directory->name }}
            </a>
        </li>
        @endforeach
    
        <!-- Tags -->
        <li>
            <a href="{{route('tags')}}" class="nav-link active" aria-current="page">
                Tags
            </a>
        </li>

        <!-- Graph view -->
        <li>
            <a href="{{route('graph-view')}}" class="nav-link active" aria-current="page">
                Graph view
            </a>
        </li>
    </ul>
</div>
