<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"F:\xampp\htdocs\za/application/admin\view\admin\welcome.html";i:1538030413;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>欢迎页面-X-admin2.0</title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <link rel="icon" href="/za/public/static/img/logos.png">
        <link rel="stylesheet" href="/za/public/static/admin/css/font.css">
        <link rel="stylesheet" href="/za/public/static/admin/css/xadmin.css">
        <script src="/za/public/static/js/jquery-1.12.4.js"></script>
    </head>
    <body>
    <div class="x-body layui-anim layui-anim-up">
        <blockquote class="layui-elem-quote">欢迎您进入后台管理系统
            <span class="x-red"></span> &nbsp;!</blockquote>
        <fieldset class="layui-elem-field">
            <legend>数据统计</legend>
            <div class="layui-field-box">
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-body">
                            <div class="layui-carousel x-admin-carousel x-admin-backlog" lay-anim="" lay-indicator="inside" lay-arrow="none" style="width: 100%; height: 90px;">
                                <div carousel-item="">
                                    <ul class="layui-row layui-col-space10 layui-this">
                                        <li class="layui-col-xs2">
                                            <a href="javascript:;" class="x-admin-backlog-body">
                                                <h3>今日表单提交量</h3>
                                                <p>
                                                    <cite id="callback"></cite></p>
                                            </a>
                                        </li>
                                        <li class="layui-col-xs2">
                                            <a href="javascript:;" class="x-admin-backlog-body">
                                                <h3>今日点击量</h3>
                                                <p>
                                                    <cite id="click"></cite></p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
        <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
        </script>

        <script type="text/javascript">
            $('body').ready(function(){
            $.ajax({
                type: 'POST',
                url: 'phone_num',
                success: function(data){
                  $('#callback').text(data[0]);
                  $('#click').text(data[1]);
                }
                });
            });
        </script>
    </body>
</html>