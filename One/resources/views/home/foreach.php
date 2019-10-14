<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>foreach</title>

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
            h1{
                color:red;
                font-size:10px;
            }
        </style>
    </head>
    <body>
       @foreach($data as $value)
            <h1 class="title">{{$value -> name}}</h1>
	   @endforeach
    </body>
</html>
