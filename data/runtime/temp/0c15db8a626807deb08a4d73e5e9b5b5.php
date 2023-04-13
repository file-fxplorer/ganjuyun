<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:57:"/www/wwwroot/weiguizhan/V2/V2HOME/public/errpage/404.html";i:1641256662;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>ERROR 404 - Not Found!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="refresh" content="10; url=/">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta name="robots" content="noindex" />
    <style type="text/css"><!--
    body {
        color: #444444;
        background-color: #fafafb;
    }
    a {
    	color:#333333;
        text-decoration:none;
    }
    .error404-con{
        position: fixed;
        top: 50%;
        left: 50%;
        margin-left: -250px;
        margin-top: -200px;
        display: block;
        width: 500px;
        height: 400px;
        text-align: center;
    }
    .error404-con .img-bg{
        height: 200px;
        width: 100%;
        display: inline-block;
        background: url('/public/errpage/error404.png') no-repeat center center;
    }
    .error404-con .title{
        font-size: 42px;
    }
    .error404-con .title-sub{
        font-size: 16px;
        margin-top: 10px;
    }
    .error404-con .oper-btn{
        margin-top: 20px;
    }
    .error404-con .oper-btn .btn{
        background-color:#e8e8e8 ;
        display: inline-block;
        padding: 10px 30px;
        font-size: 22px;
        border-radius: 50px;
        margin: 0 10px;
    }
    .error404-con .oper-btn .btn.btn2{
        background-color:#ff6662;
        color: #fff;
    }
    @media only screen and (max-width:450px){
        .error404-con{
            width: 300px;
            height: 350px;
            margin-left: -150px;
            margin-top: -175px;
        }
         .error404-con .img-bg{
             background-size: contain;
         }
         .error404-con .title{
             font-size: 30px;
         }
         .error404-con .title-sub{
             font-size: 13px;
         }
         .error404-con .oper-btn .btn{
             padding: 10px 20px;
             font-size: 16px;
             border-radius: 50px;
         }
    }

</style>
</head>
<body>
    <div class="error404-con">
        <div class="img-bg"></div>
        <div class="title">哎呀！找不到页面了！</div>
        <div class="title-sub">不要伤心，可能是网址错了呢，重新核对一下吧。</div>
        <div class="oper-btn">
            <a class="btn btn1" href="javascript:history.go(-1);">回到上一页</a>
            <a class="btn btn2" href="/">回到首页</a>
        </div>
    </div>
</body>
</html>
