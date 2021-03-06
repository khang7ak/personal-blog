<!doctype html>
<html lang="{{str_replace('_','-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf_token" value="{{csrf_token()}}">
    <title>Personal Blog</title>
    <link href="{{mix('css/app.css')}}" type="text/css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>

</head>
<body>
    <div id="app">
        <example-component></example-component>
    </div>


    <script src="{{mix('js/app.js')}}" type="text/javascript"></script>
</body>
</html>
