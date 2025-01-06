<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Laravel</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <style>
        body {
          background-color: lightgray
        }
      </style>
</head>
<body class="antialiased">
    @inertia
</body>
</html>
