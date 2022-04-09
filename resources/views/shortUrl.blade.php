<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Short Url</title>
    <style>
        body,html{
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100vh;
        }
    </style>
</head>
<body id="app">
    <shorturl-component></shorturl-component>
    
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>