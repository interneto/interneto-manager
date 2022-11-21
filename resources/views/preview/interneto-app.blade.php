<x-layout-home>
    <main class="mx-5 my-2">

        <div class="container px-4 py-5" id="featured-3">
            <h2 class="pb-2 border-bottom">Interneto manager</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                        <img src="/assets/docker-icon.svg" alt="Docker icon" height="33" width="33">
                    </div>
                    <h3 class="fs-2">Self-hosted app</h3>
                    <p>Self-host your application with Docker in a server or in local.</p>
                    <a href="#hosting" class="icon-link d-inline-flex align-items-center">
                        Call to action
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#host-your-data"></use>
                        </svg>
                    </a>
                </div>
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                        <img src="/assets/laravel.svg" alt="Docker icon" height="33" width="33">
                    </div>
                    <h3 class="fs-2">Web technologies</h3>
                    <p>Created with web technologies using Laravel (full-stack framework of PHP) + Bootstrap (framework of CSS, HTML components and icons).</p>
                    <a href="#web-tech" class="icon-link d-inline-flex align-items-center">
                        Call to action
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#chevron-right"></use>
                        </svg>
                    </a>
                </div>
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                        <img src="/assets/open-source.svg" alt="Docker icon" height="33" width="33">
                    </div>
                    <h3 class="fs-2">FOSS (Free and Open Source)</h3>
                    <p>The code is hosted on GitHub and you can contribute to the project making a pull request reporting bugs. Also you can fork it to create your own version.</p>
                    <a href="#foss" class="icon-link d-inline-flex align-items-center">
                        Call to action
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#chevron-right"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="container px-4 py-5">
            <h3>Explanation</h3>
            <p>
                Interneto manager is a bookmark manager to store and save links from the internet or your local machine. With te <a href="https://en.wikipedia.org/wiki/Uniform_Resource_Identifier#Syntax">URI format</a> (URI = scheme ":" ["//" authority] path ["?" query] ["#" fragment]).
                <p>
                    The purpose is to permit the user to make a database of related links with valuable information to generate
                    a knowledge system.
                </p>
                <p>
                    Classify links is the best way to organize the information and make your own <span>innernet</span>. You can make your
                    own databse with folders, tags, and rate of your links. Also you can search links via the type of content.
                </p>
                <span>Pass from the Internet to your own InnerNet.</span>

                <blockquote class="bg-gray primary">
                    <p>
                        <em>"Pass from the Internet to your own InnerNet."</em>
                    </p>
                    <small>Interneto dev
                        <cite title="Source Title">Source Title</cite>
                    </small>
                </blockquote>

                <span>Information</span> is just the <span>in</span>side <span>formation</span> with external data to create valuable knowledge.
            </p>


            <h3 id="hosting">Host your data</h3>
            <p>
                Interneto manager is a <i>self-hosted application</i> thtat runs on Docker container, you can use it in local or in the cloud, it's your decision and your data. The app is totally private because runs on your machine or the server that you contract. You can run the application in the port localhost:8000 and open the database with adminer in teh port:8080.
            </p>


            <h3 id="web-tech">Web technologies</h3>
            <p>
                This app is created as web page with <a href="https://laravel.com/">Laravel</a> a full-stack framework of PHP, for the styles use <a href="https://getbootstrap.com/">Bootstrap</a> a framework of CSS and Javascript, and also uses some Bootstrap icons as a web font lik Fontawesome. At the backend the database is stored on Docker with Postgres SQL.
            </p>

            <h3 id="foss">Free and Open Source</h3>
            <p>
                This is a free and open source project. If you want to collaborate you can do it in <a href="https://github.com/interneto/interneto-manager">Interneto manager · GitHub</a>. You can fork it or use it always referenced the author.
            </p>

        </div>


        <div class="container px-4 py-5">

            <!-- <a href="https://github.com/interneto/interneto-managerarchive/refs/heads/main.zip" class="btn btn-primary btn-lg">Download app</a> -->

            <h3>Installation process</h3>

            <ol>
                <li>Clone the repository with (HTTPS or SSH) -&gt; <code>git clone https://github.com/interneto/interneto-manager</code></li>
                <li>Install dependencies -&gt; <code>composer install</code></li>
                <li>Configure environment profile, you can copy the example and modify it to your case-&gt; <code>cp .env.example .env</code></li>

                <pre>
                    <code class="language-html" data-lang="config">
                        APP_NAME=Laravel
                        APP_ENV=local
                        APP_KEY=base64:FFkO0fAFGtICQr+5moSEY6wnfg7tYXZLc5vzLYljHPk=
                        APP_DEBUG=true
                        APP_URL=http://localhost

                        LOG_CHANNEL=stack
                        LOG_DEPRECATIONS_CHANNEL=null
                        LOG_LEVEL=debug

                        DB_CONNECTION=pgsql
                        DB_HOST=127.0.0.1
                        DB_PORT=5432
                        DB_DATABASE=postgres
                        DB_USERNAME=postgres
                        DB_PASSWORD=postgres

                        BROADCAST_DRIVER=log
                        CACHE_DRIVER=file
                        FILESYSTEM_DISK=local
                        QUEUE_CONNECTION=sync
                        SESSION_DRIVER=file
                        SESSION_LIFETIME=120

                        MEMCACHED_HOST=127.0.0.1

                        REDIS_HOST=127.0.0.1
                        REDIS_PASSWORD=null
                        REDIS_PORT=6379

                        MAIL_MAILER=smtp
                        MAIL_HOST=mailhog
                        MAIL_PORT=1025
                        MAIL_USERNAME=null
                        MAIL_PASSWORD=null
                        MAIL_ENCRYPTION=null
                        MAIL_FROM_ADDRESS="hello@example.com"
                        MAIL_FROM_NAME="${APP_NAME}"

                        AWS_ACCESS_KEY_ID=
                        AWS_SECRET_ACCESS_KEY=
                        AWS_DEFAULT_REGION=us-east-1
                        AWS_BUCKET=
                        AWS_USE_PATH_STYLE_ENDPOINT=false

                        PUSHER_APP_ID=
                        PUSHER_APP_KEY=
                        PUSHER_APP_SECRET=
                        PUSHER_HOST=
                        PUSHER_PORT=443
                        PUSHER_SCHEME=https
                        PUSHER_APP_CLUSTER=mt1

                        VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
                        VITE_PUSHER_HOST="${PUSHER_HOST}"
                        VITE_PUSHER_PORT="${PUSHER_PORT}"
                        VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
                        VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
                    </code>

                </pre>


                <li>Configure the server, in this case we use Docker <em class="font-italic">docker-compose.yml</em></li>

                <pre>
                    <code class="language-html" data-lang="yml">
                            version: '3.8'
                        services:
                        db:
                            image: postgres:14.1-alpine
                            restart: always
                            environment:
                                - POSTGRES_DB=postgres
                                - POSTGRES_USER=postgres
                                - POSTGRES_PASSWORD=postgres
                            ports:
                                - 5432:5432
                            volumes:
                                - db:/var/lib/postgresql/data
                        admin:
                            image: adminer
                            restart: always
                            depends_on:
                                - db
                            ports:
                                - 8080:8080
                        volumes:
                            db:
                                driver: local
                    </code>
                </pre>

                <li>Initialize a container with docker compose -&gt; <code>docker compose up -d</code></li>
                <li>Connect to the database via SQLtools (with VS Code extension) and fill the fields (username, password, ports, etc)</li>
                <li>Install npm dependencies -&gt; <code>npm install</code> and <code>npm run dev</code></li>
                <li>Generate key with <code>php artisan key:generate</code> or when serving in the browser</li>
                <li>Make a fresh migration -&gt; <code>php artisan migrate:fresh --seed</code></li>
                <li>Serve the web with artisan -&gt; <code>php artisan serve</code></li>

                <ol>
        </div>
    </main>

</x-layout-home>
