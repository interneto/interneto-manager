<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interneto manager - Host your bookmarks in local or online</title>
    <!-- <link rel="stylesheet" href="/css/style.css"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
</head>

<body>

    <header class="px-4 d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="{{route('home')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <img src="/interneto-logo/interneto-logo.svg" alt="interneto logo" height="40px" width="40px" />
            <span class="fs-4">Interneto</span>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{route('home')}}" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="{{route('interneto-app')}}" class="nav-link px-2 link-dark">App</a></li>
            <li><a href="{{route('interneto-links')}}" class="nav-link px-2 link-dark">Links</a></li>
            <li><a href="{{route('blog')}}" class="nav-link px-2 link-dark">Blog</a></li>
            <li><a href="{{route('about')}}" class="nav-link px-2 link-dark">About</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <a href="{{route('login')}}">
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
            </a>
            <a href="{{route('register')}}">
                <button type="button" class="btn btn-outline-primary me-2">Register</button>
            </a>
        </div>
    </header>

    {{ $slot }}

    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="{{route('home')}}" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">App</a></li>
            <li><a href="{{route('interneto-links')}}" class="nav-link px-2 link-dark">Links</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Blog</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
        </ul>

        <div class="d-flex flex-column flex-sm-row justify-content-between mx-5">
            <p class="text-center text-muted">© 2022 Interneto. Self hosting bookmark manager.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3">
                    <a class="link-dark" href="https://github.com/interneto">
                        <i class="bi bi-github"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a class="link-dark" href="https://twitter.com/internetoOK">
                        <i class="bi bi-twitter"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a class="link-dark" href="https://raindrop.io/interneto">
                        <i class="bi bi-cloud"></i>
                    </a>
                </li>
            </ul>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
