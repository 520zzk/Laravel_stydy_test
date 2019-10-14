<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>

    <title>BootStrap 界面</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="" method="POST">
                <div class="btn-group" data-toggle="buttons">
                    <label for="" class="btn btn-success">
                        <input type="checkbox" name="zzk[]" value="001"> 数学 <!--多选框支持多个合并成数组提交-->
                    </label>
                    <label for="" class="btn btn-success">
                        <input type="checkbox" name="zzk[]" value="002"> 语文
                    </label>
                    <label for="" class="btn btn-success">
                        <input type="checkbox" name="zzk[]" value="003"> 音乐
                    </label>
                </div>

                <div class="btn-group" data-toggle="buttons">
                    <label for="" class="btn btn-success">
                        <input type="radio" name="op" value="数学"> 数学
                    </label>
                    <label for="" class="btn btn-success">
                        <input type="radio" name="op" value="语文"> 语文
                    </label>
                    <label for="" class="btn btn-success">
                        <input type="radio" name="op" value="音乐"> 音乐
                    </label>
                </div>
                {{csrf_field()}}
                <button type="submit" class="btn btn-info">提交</button>
            </form>
        </div>
        <div class="row">
             <div>
                            <button class="btn btn-info" data-toggle="modal" data-target="#modal01" data-backdrop="false" data-keyboard="false"> 弹出模态框</button>

                            <div class="modal" id="modal01" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h3>我这里是标题</h3>
                                        </div>

                                        <div class="modal-body">
                                            <p>吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-warning" data-dismiss="modal">明白</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-info" data-toggle="modal" data-target="#modal02" data-backdrop="true" data-keyboard="true"> 弹出模态框</button>

                            <div class="modal" id="modal02" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h3>我这里是标题22222</h3>
                                        </div>

                                        <div class="modal-body">
                                            <p>吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱赞赞赞赞赞赞赞赞赞</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-warning" data-dismiss="modal">明白</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
        </div>

           <a href="javascript:;" class="btn btn-danger" id="alertA" data-placement="left" title="我这是标题" data-content="我这里是内容部分">点击我弹出内容</a>
           <a href="javascript:;" class="btn btn-danger" id="alertb" >点我我是函数配置</a>
    </div>
</body>
<script>
    $(function(){
        $('#alertA').popover();
        $('#alertb').popover({
            title:'我是函数配置的',
            content:"你看我的内容怎么样",
            trigger:'hover',
            delay:500
        });
    });
</script>
</html>
