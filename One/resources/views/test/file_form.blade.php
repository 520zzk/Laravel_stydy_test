<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>验证</title>
    </head>
    <body>

        <form action="" method="POST" enctype="multipart/form-data">
            姓名：<input type="text" name="name" id="" value="" placeholder="请填写您的姓名"/><br/>
            {{csrf_field()}}
            密码：<input type="password" name="password" id="" value="" /><br/>
            头像：<input type="file" name="filedata"><br/>
            <input type="submit" value="提交">
        </form>
    </body>
</html>
