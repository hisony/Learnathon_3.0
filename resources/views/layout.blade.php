<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>Project - @yield('title')</title>
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
    <header class="header">
        @yield("header")
    </header>
    
    <main class="content">
        @yield('txt1')
        @yield('main')
    </main>
    
    <footer class="footer">
        @yield("footer")
    </footer>
</body>

</html>
