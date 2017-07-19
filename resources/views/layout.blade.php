<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Referencing mixed final css -->
    <link media="all" type="text/css" rel="stylesheet" href="/css/final.css">

    <!-- Referencing mixed final js -->
    <script src="/js/final.js"></script>

    <title>Riesland</title>
</head>
<body>

@include('partials.global.mainnav')

<div class="container-fluid">
    @yield('content')
</div>

@include('partials.global.bootjquery')

</body>
</html>