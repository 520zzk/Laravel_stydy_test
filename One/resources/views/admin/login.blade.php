<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <script src="/js/jquery-3.4.0.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <style>
            body{
                background: #3cb4b5;
            }
            img{
                width:100px;
                height: 100px;
                display: block;
                margin:0 auto;
            }
            .box{
                background: #94e9b0;
                /* width:300px; */
                height:600rpx;
                padding: 10px  20px;
                border-radius:5px;
                position:fixed;
                top:50%;
                left:50%;
                transform: translate(-50%,-50%);
                animation: downup 1s 0.5s forwards;
                opacity: 0;
            }
            @@keyframes downup{
                from{
                    top:10%;
                }
                to{
                    top:50%;
                    opacity: 1;
                }
            }
        </style>
	</head>

	<body>

        <div class="box  col-sm-6  col-md-3">
            <form action="/admin/onlogin" method="POST" class="">
                <img src="/img/用户.svg" alt="">
                <div class="form-group">
                    <label class="" for="name">姓名：</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="password">密码</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div>
                       <a href="javasript:;" onclick="zzk()">注册</a>
                     <input type="submit" class="btn btn-success pull-right" value="登陆">
                </div>
                <input type="hidden" name="_token" value="<?php echo csrf_token();?> ">
            </form>
        </div>

        <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <!--------------------------------->
                        <div class="modal-header" id='ctitle'>
                            注册用户
                        </div>
                        <div class="modal-body">
                            <form name='cform' method="post" class="from" action='./addUser'>
                                    <div class="from-group">
                                        <span>姓名：</span>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                  <div class="from-group">
                                      <span>密码：</span>
                                      <input type="text" name="pwd" class="form-control">
                                  </div>
                                  @csrf
                                   <input type='submit' name='sbtn' class='btn btn-success btn-block' style="margin-top:20px;" value='注册'/>

                            </form>
                        </div>

                    </div>
                </div>
        </div>
    
    <script>
        function zzk(){
            $('#myModal').modal('show');
        }
    </script>

	</body>
</html>
