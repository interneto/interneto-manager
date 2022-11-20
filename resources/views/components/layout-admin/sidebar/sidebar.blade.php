<div class="mx-2 my-2">

    <!-- User info -->
    <div class="flex-shrink-0 dropdown">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle" width="32" height="32">
            <span>{{ auth()->user()->name }}</span>
        </a>
        <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
            
        </ul>
    </div>

    <!-- Collections -->
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
                All bookmarks
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                Unsorted
            </a>
        </li>
        <li>
            <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                Trash
            </a>
        </li>
    </ul>
    <li>
        <a href="#" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16">
                <use xlink:href="#speedometer2"></use>
            </svg>
            Graph view
        </a>
    </li>
    <li>
        <a href="#" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16">
                <use xlink:href="#table"></use>
            </svg>
            Collections
        </a>
    </li>

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
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
            Dashboard
          </button>
          <div class="collapse" id="dashboard-collapse" style="">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="link-dark rounded">Overview</a></li>
              <li><a href="#" class="link-dark rounded">Weekly</a></li>
              <li><a href="#" class="link-dark rounded">Monthly</a></li>
              <li><a href="#" class="link-dark rounded">Annually</a></li>
            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
            Orders
          </button>
          <div class="collapse" id="orders-collapse" style="">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="link-dark rounded">New</a></li>
              <li><a href="#" class="link-dark rounded">Processed</a></li>
              <li><a href="#" class="link-dark rounded">Shipped</a></li>
              <li><a href="#" class="link-dark rounded">Returned</a></li>
            </ul>
          </div>
        </li>
        <li class="border-top my-3"></li>
      </ul>

    <!-- Types -->
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
    <!--
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>

        <div>
            <div></div>
            <div></div>
            <div></div>
        </div>
     -->

    <!-- Tags -->
    <div class="tags">
        Tags
    </div>

    <!-- Rating -->
    <div class="rating">
        Rating
    </div>

</div>
