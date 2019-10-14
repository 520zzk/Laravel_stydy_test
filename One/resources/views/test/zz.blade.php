<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>注册表单</title>
	</head>
	<body>
        <form action="" method="post">
            <p>姓名：<input type="text" name="username" value=""></p>
            <p>密码: <input type="possword" name="password" ></p>
            {{csrf_field()}}
            <input type="submit" value="立即注册">

        </form>
        <h1>blade.php</h1>
        <script>

        </script>
	</body>
</html>