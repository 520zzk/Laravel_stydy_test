<? php
  
?>

<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SHOW.blade</title>

        <!-- Fonts -->

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

        </style>
    </head>
    <body>
        <h1>{{$name}}</h1>
        <p>{{$content}}</p> <span>{{date('Y-m-d H-i-s')}}</span>

    </body>
</html>
