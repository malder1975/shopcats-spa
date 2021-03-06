<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Title</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">

        <App-Header></App-Header>

        <div class="container">

            <router-view></router-view>

        </div>

        <App-Footer></App-Footer>

    </div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>