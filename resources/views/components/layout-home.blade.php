<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:title" content="Interneto - Pass from the Internet to the Innernet.">
    <meta name="description" content="Interneto is a project to classify internet things." />
    <meta property="og:image" content="https://www.interneto.dev/interneto-logo.svg">
    <meta property="og:url" content="https://www.interneto.dev/">
    <meta property="og:site_name" content="Interneto">

    <title>Interneto manager - Host your bookmarks in local or online</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="canonical" href="https://www.interneto.dev/">
    <!-- <link rel="stylesheet" href="/css/style.css"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>
</head>

<body>

    <header class="px-4 py-3 mx-5 d-flex flex-wrap justify-content-center border-bottom">
        <a href="{{route('home')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <img src="/assets/interneto-logo.svg" alt="interneto logo" height="40px" width="40px" />
            <h1 class="fs-4">Interneto</h1>
        </a>

        <div class="col-md-6 d-flex justify-content-center flex-nowrap">
            <ul class="nav">
                <li><a href="{{route('home')}}" class="nav-link px-2">Home</a></li>
                <li><a href="{{route('interneto-app')}}" class="nav-link px-2">App</a></li>
                <li><a href="{{route('interneto-links')}}" class="nav-link px-2">Links</a></li>
                <li><a href="{{route('blog')}}" class="nav-link px-2">Blog</a></li>
                <li><a href="{{route('about')}}" class="nav-link px-2">About</a></li>
            </ul>
        </div>

        <div class="col-md-3 text-end">
            <a class="btn btn-primary" href="{{route('login')}}" role="button">Login</a>
            <a class="btn btn-primary" href="{{route('register')}}" role="button">Register</a>
        </div>
    </header>

    <main class="mx-5 my-2">
        <div class="container px-4 py-5" id="featured-3">
            {{ $slot }}
        </div>
    </main>

    <footer class="py-3 my-4">
        <div class="d-flex flex-column flex-sm-row justify-content-center ">
            <p class="text-center text-muted">© 2022 Interneto. Self-hosted bookmark manager.</p>
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

</body>
</html>
