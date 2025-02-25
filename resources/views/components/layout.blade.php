<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is a test!</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        <nav class="bg-slate-500 flex justify-start items-center space-x-5 h-10">
            <a href="/items">Items</a>
            <a href="/other">Other</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>

</body>

</html>
