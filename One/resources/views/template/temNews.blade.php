<!--
    在views/template/temNews.blade.php
    这个是父级文件，
 -->
<style>
    h1{
        color:red;

    }
    footer{
        background: #000000;
        min-height:60px;
        font-size:30px;
        color:#fff;
    }
</style>
<h1>
    我这是头部信息
</h1>

@yield('news')

<footer>
    这里是尾部地方
</footer>
