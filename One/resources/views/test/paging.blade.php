<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <script src="/js/app.js"></script>
        <title>验证</title>
        <style>
            .table{
                border:1px solid red;
                width:500px;
                margin: 0 auto;
                padding:10px 0;
            }
            tr{
                display: flex;
                justify-content: space-around;

            }
            tr:nth-child(odd){
                background: pink;
            }
            tr:nth-child(even){
                background: greenyellow;
            }
            .table .tr{
                background: #000;
                color: #fff;;
            }
            td img{
                width:50px;
                height:50px;
                border-radius:50%;
            }
            .table-header{
                width:100%;
            }
            .table-link{
                margin:0 auto;
                margin-top:10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                 <div class="table-header">
                     <table class="table">
                        <thead>
                            <tr class="tr">
                                <th>id</th>
                                <th>姓名</th>
                                <th>头像</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($data as $val)
                            <tr>
                                <td>{{$val ->id}}</td>
                                <td>{{$val ->name}}</td>
                                <td><img src="/img/{{$val ->img}}" alt=""></td>
                            </tr>
                            @endforeach
                        </tbody>
                     </table>
                 </div>
                 <div class="table-link">
                      {{$data ->links()}}     <!--分页视图显示出来-->
                 </div>
            </div>
        </div>

    </body>
</html>
