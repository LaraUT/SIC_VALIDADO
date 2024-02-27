<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')<title/>
</head>


<body>
    <header>
        <h1>BIENVENIDO</h1>
    </header>

    <main>
        @yield(('content'))
    </main>

    <footer>
        <div>
            <h1>
                Mal
            </h1>
        </div>
    </footer>
    
</body>
</html>