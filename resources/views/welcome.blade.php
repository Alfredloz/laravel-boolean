<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        {{-- Richieste esercizio --}}
        {{-- Istruzioni:
            Proseguendo con l'idea di blog create un applicazione laravel con 3 routes: home, about, blog
            questa volta usate un controller per "smistare il traffico" tra la route e la view.
            Create le view per le tre route.
            Usate php artisan make:controller NomeDelController per creare il controller.
            Quando le route funzionano e le tre pagine sono visibili passate alla creazione del database per la vostra applicazione usando phpmyadmin.
            create un database laravel_blog
            create una tabella posts che abbia come colonne un id, title, body.
            inserite via phpmyadmin qualche post nella tabella posts.
            Ora collegate il database all'applicazione laravel modificando il file .env che si tova nella vosta cartella pincipale. (leggete la slide 107)
            Create un modello Post usando il comando php atisan make:model Post (slide 105)
            Se tutto é impostato correttamente potete usate il metodo all() di eloquent nel controller per passare i posts alla view blog (slide 109). --}}
                    {{-- style --}}
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    <h1>Boolean Blog</h1>
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Home</a>
                    <a href="https://laracasts.com">Blog</a>
                    <a href="https://laravel-news.com">About</a>
                </div>
            </div>
        </div>
    </body>
</html>
