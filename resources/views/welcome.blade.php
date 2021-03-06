<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>lorado.dev</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased">
<div class="relative flex items-center justify-center min-h-screen py-16">
    <div class="max-w-3xl w-full mx-auto px-5 sm:px-6 lg:px-8 ">
        <img class="mx-auto block w-52 sm:w-64" src="/img/logo-with-text.svg" alt="lorado.dev logo"/>

        <h1 class="mt-12 sm:mt-16 text-center font-light text-3xl sm:text-5xl">
            Web-Entwickler Blog
        </h1>

        <div class="mt-6 sm:mt-8 w-full sm:rounded-lg space-y-4">
            <p>
                Hi! Hier wird demnächst ein Blog entstehen, auf dem ich nützliche Tipps
                und mein Wissen aus dem Alltag rund um Web-Technologien teilen werde!
            </p>
            <p>
                Falls Du bei der Entwicklung der Webseite dabei sein möchtest, kannst du mir
                <a class="underline text-l-green hover:text-l-green-light" href="https://www.twitch.tv/lorado_dev"
                   target="_blank">auf Twitch folgen</a>. Aktuell sind die Streams jeden Dienstag um 20 Uhr geplant.
                Außerdem kannst Du auf meinem
                <a class="underline text-l-green hover:text-l-green-light"
                   href="https://www.youtube.com/channel/UCfwwQ8LDpES7JkGQPmNWxgg"
                   target="_blank">YouTube Kanal</a>
                die thematisch gebündelte Ausschnitte aus dem Stream anschauen.
            </p>
            <p>
                Der Blog wird absichtlich mit gewissem overengineering aufgebaut, damit ich bereits jetzt Information
                teilen kann.
            </p>
        </div>

        <div class="flex items-center space-x-4 justify-center mt-8 sm:mt-16">
            <a href="https://github.com/lorado/lorado.dev" target="_blank" class="footer-icon">
                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                </svg>
            </a>
            <a href="https://www.youtube.com/channel/UCfwwQ8LDpES7JkGQPmNWxgg" target="_blank" class="footer-icon">
                <svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                </svg>
            </a>
            <a href="https://www.twitch.tv/lorado_dev" target="_blank" class="footer-icon">
                <svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M11.571 4.714h1.715v5.143H11.57zm4.715 0H18v5.143h-1.714zM6 0L1.714 4.286v15.428h5.143V24l4.286-4.286h3.428L22.286 12V0zm14.571 11.143l-3.428 3.428h-3.429l-3 3v-3H6.857V1.714h13.714Z"/>
                </svg>
            </a>
        </div>
    </div>
</div>
</body>
</html>
