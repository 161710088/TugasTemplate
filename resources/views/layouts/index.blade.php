<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="\Bootstrap\af\dist\css\bootstrap.css" />
    <link rel="stylesheet" href="\Bootstrap\af\dist\css\bootstrap.css" />
    <link rel="stylesheet" href="\Bootstrap\af\dist\css\bootstrap-theme.css" />
    <link rel="stylesheet" href="\Bootstrap\af\dist\css\bootstrap-theme.min.css" />
    <script src="main.js"></script>
</head>
<body>
    @include('template.header')
    @yield('content')
    @include('template.footer')   
</body>
</html>