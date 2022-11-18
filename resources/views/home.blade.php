<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interneto manager</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <header>

        <div class="logo">
            <img src="/interneto-logo/interneto-logo.svg" alt="interneto logo" />
        </div>

        <h1>Interneto manager</h1>

        <a href="{{route('front-page')}}">
            <button type="button" class="btn btn-outline-primary float-right">
                Interneto manager app
            </button>
        </a>

        <div>Features</div>

        <div>
            <a href="blog">
                Blog
            </a>
        </div>
        <div>
            <a href="about">
                <button type="button" class="btn btn-outline-primary float-right">
                    About
                </button>
            </a>
        </div>
        <div>
            <a href="{{route('login')}}">
                <button type="button" class="btn btn-outline-primary float-right">
                    Login
                </button>
            </a>
        </div>
        <div><a href="{{route('register')}}">
            <button type="button" class="btn btn-outline-primary float-right">
                Register
            </button>
        </a></div>
    </header>

    <main>
        <div>
            <h2>Bookmark manager</h2>
        </div>

        <h3>Description</h3>
        <p>
            Interneto manager is a bookmark manager to store and save links from the internet and also from your local
            machine.

            The purpose is to permit the user to make a database of related links with valuable information to generate
            a knowledge system.

            Classify links is the best way to organize the information and make your own <span>innernet</span>. You can make your
            own databse with folders, tags, and rate of your links. Also you can search links via the type of content.

            <span>Pass from the Internet to your own InnerNet.</span>

            <span>Information</span> is just the <span>in</span>side <span>formation</span> with external data to create valuable knowledge.

            Interneto manager is a <i>self-hosted application</i> both in the cloud and locally that allows to categorize
            links from both internet and local routes. You should be able to export your database and view local or use
            it online in a remote server.
        </p>
        <br>
        <h4>Interneto comes from...</h4>
        <p>
            This idea comes from wanting to have a well-classified internet system available.

            When you set about the task, you realize that classification is a personal process, and that what really
            matters is the tool you use to classify the content and the system that you choose.

            The classification system is mainly defined by language if the word does not exist, there is no way to
            express that thought in that classification.
        </p>
        <br>
        <h4>The way to classify can vary</h4>
        <li>
            <ul>the most common is to classify from the general to the concrete, from the most abstract to the most
                concise.</ul>
            <ul>since the internet contains everything imaginable and more, it becomes a dictionary classification.</ul>
            <ul>within the classification there are many methods to organize the content and therefore labeling is
                necessary in addition to a hierarchical tree.</ul>
        </li>
    </main>

    <footer>
        <div class="about1uw1">
            <h5>Interneto</h5>
            <p>Self hosting bookmark manager</p>
            © 2022 Interneto
            <br>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-twitter" viewBox="0 0 16 16">
                <path
                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
            </svg>
            <a href="https://twitter.com/InternetoOK">Twitter</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
            </svg>
            <a href="https://github.com/interneto">GitHub</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
                <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
            </svg>
            <a href="https://raindrop.io/InternetoOK">Interneto links - raindrop.io</a>
            <a href="https://help.interneto.dev/">Terms</a>
            <a href="https://help.interneto.dev/privacy">Privacy</a>
        </div>
    </footer>
</body>
</html>
