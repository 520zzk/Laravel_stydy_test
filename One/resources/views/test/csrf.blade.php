<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
        <form action="{{route('csrfData')}}" method="post">
           姓名：<input type="text" name="name" value="" placeholder="请填写名称"/>
           <!-- {{csrf_field()}} -->
           <!-- <input type="hidden" name="_token" value="<?php echo csrf_token();?>"> -->
           <input type="hidden" name="_token" value="{{csrf_token()}}"> <!-- 有一定时间，-->
           <input type="submit" id="" name="sub" value="提交" />
        </form>
	</body>
</html>
