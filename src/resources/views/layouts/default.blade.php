<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body{
            font-size: 16px;
            margin: 5px;
        }
        h1{
            font-size: 36px;
            color: #827569;
            border-bottom: 1px solid #827569;
        }
        .content {
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <h1>@yield('title')</h1>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>