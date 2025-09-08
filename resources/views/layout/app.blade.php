<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
           margin: 0px;
           display: flex;
           flex-direction: column;
           min-height: 100vh;
        }
        main{
            flex: 1 1 auto;
        }
    </style>
</head>
<body>
    @include('components.nav.topbar')
     
   <main>

    @yield('content')
    </main>
    @include('components.nav.footer')
</body>
</html>
