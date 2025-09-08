<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            display: flex;
            margin: 0px;
            padding: 0px;
            max-width: 100vw;
            min-height: 100vh;
            flex-direction: column;
        }
        main{
            flex: 1 1 auto ;
        }
    </style>
</head>
<body>
    @include('layout.topbar')
    <main>
    @yield('content')
    </main>
    @include('layout.footer')
</body>
</html>
