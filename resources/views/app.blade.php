<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="icon" type="image/png" href="/favicon.png" />
    <script id="iframe_api" src="https://www.youtube.com/iframe_api"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100..900&display=swap" rel="stylesheet" />

    @vite('resources/js/app.js')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @inertiaHead

</head>

<body>

    @inertia

</body>

</html>
