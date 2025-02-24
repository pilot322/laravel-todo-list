<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What</title>
</head>

<body>
    <h1>Items</h1>

    <ul>
        @foreach ($items as $item)
            <li>
                <a href="/items/{{ $item['id'] }}">
                    {{ $item['name'] }} : {{ $item['amount'] }}
                </a>
            </li>
        @endforeach
    </ul>

</body>

</html>
