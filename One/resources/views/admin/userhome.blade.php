<!doctype html>
<html >
   <head>
    <meta charset="UTF-8">
    <title> {{ $data['name'] }} 的主页</title>
    <!-- <link href="/css/app.css" rel="stylesheet">
    <script src="/js/app.js"></script> -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/jquery-3.4.0.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <style>
        html,body{
            height: 100%;
            /* background: #d0ebfc; */
        }
        .box{
            width:80%;
            margin:0 auto;
            padding:50px 0 ;
        }
        .header{
            border:1px solid #220b52;
            border-radius: 5px;
            margin:10px 0 10px 8%;
            text-align: center;
            font-weight: 600;
        }
        .ul-right{
            border:1px solid gray;
            height: 600px;
            margin-left:8%;
        }
        .box_dis{
            border:1px solid gray;
            height: 600px;
            margin-left:2px;
            overflow: auto;
        }
    </style>
 </head>
 <body>

      <div class="box">
        <div class="row">
          <div class="col-md-10 header ">
          	<font size='20'> {{ $data['name'] }} 欢迎您 </font>
          </div>
        </div>

        <div class="row" style="height: 90%;">
          <div class="col-md-2 col-sm-2 col-xs-2 ul-right" style=''>
          	<ul class="nav ">
                <!-- <li><a href='./category'>分类管理</a></li>
                <li><a href='./cake'>商品管理</a></li>
                <li><a href="">活动管理</a></li>
                <li><a href="">客户管理</a></li>
                <li><a href="">订单管理</a></li>
                <li><a href="">统计查询</a></li> -->
            </ul>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-8 box_dis">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>姓名</th>
                        <th>密码</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($userAll as $user)
                       <tr>
                           <td>{{$user  ->name}}</td>
                           <td>{{$user  ->pwd}}</td>
                           <td>操作</td>
                       </tr>
                    @endforeach
                </tbody>
            </table>




          </div>
        </div>
      </div>

 </body>




</html>
