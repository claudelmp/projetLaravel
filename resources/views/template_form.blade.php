    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formations</title>
        <!--url() construit une urle à partir de l'URL courante : public-->
        <link rel="stylesheet" href="{{ url('css/bulma.min.css') }}" />

        @yield('css')
      </head>
      <body>
        <main class="section">
            <div class="container">
                @yield('content')
            </div>
        </main>
      </body>
    </html>