<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>验证</title>
    </head>
    <body>

       @if(count($errors) > 0)
            <div>
                @foreach($errors ->all() as $e)
                <p>{{$e}}</p>
                @endforeach
            </div>
       @endif
       <?php
       echo $errors     /*输出来看看*/
       ?>
        <form action="" method="POST">
            姓名：<input type="text" name="name" id="" value="" placeholder="请填写您的姓名"/><br />
            email <input type="email" name="email" id="" value="" /><br/>
            密码：<input type="password" name="password" id="" value="" /><br />
            <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
            <input type="submit" value="提交">
        </form>
    </body>
</html>
