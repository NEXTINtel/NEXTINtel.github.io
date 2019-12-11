<!--添加常用联系人-->
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>畅行 - 让出行更便捷. | 添加常用联系人 </title>
    <link rel="stylesheet" type="text/css" href="../../static/admin/layui/css/layui.css"/>
    <link rel="stylesheet" type="text/css" href="../../static/admin/css/admin.css"/>
</head>
<body>
<form class="layui-form column-content-detail" action="../../../php/passenger.php" method="post">
    <div class="layui-tab">
        <ul class="layui-tab-title">
            <li class="layui-this">添加常用联系人</li>
            <!--li>SEO优化</li-->
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <div class="layui-form-item">
                    <label class="layui-form-label">姓名：</label>
                    <div class="layui-input-block">
                        <input type="text" name="name" required lay-verify="required" placeholder="请输入真实姓名" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">性别：</label>
                    <div class="layui-input-block">
                        <select name="sex" lay-verify="required">
                            <option value="">请选择性别类型</option>
                            <option value="男">男</option>
                            <option value="女">女</option>
                        </select>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">身份证号：</label>
                    <div class="layui-input-block">
                        <input type="text" name="IDnumber" required lay-verify="required" placeholder="请输入常用联系人身份证号（大陆）" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">邮箱：</label>
                    <div class="layui-input-block">
                        <input type="text" name="email" required lay-verify="required" placeholder="请输入常用联系人邮箱（用于找回密码）" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">联系<br/>方式：</label>
                    <div class="layui-input-block">
                        <input type="text" name="phone" required lay-verify="required" placeholder="请输入常用联系人联系方式" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">信息<br/>上传：</label>
                    <div class="layui-input-block">
                        <input type="file" name="file（可随便定义）" class="layui-upload-file">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">联系人<br/>类型：</label>
                    <div class="layui-input-block">
                        <input type="checkbox" name="label[tj]" title="成人" checked>
                        <input type="checkbox" name="label[zd]" title="儿童">
                        <input type="checkbox" name="label[hot]" title="学生">
                        <input type="checkbox" name="label[hot]" title="军人及残疾人">
                    </div>
                </div>
                <!--div class="layui-form-item">
                    <label class="layui-form-label">是否单页：</label>
                    <div class="layui-input-block">
                        <input type="checkbox" name="switch" lay-skin="switch">
                    </div>
                </div-->
                <!--div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">文章内容：</label>
                    <div class="layui-input-block">
                        <textarea class="layui-textarea layui-hide" name="content" lay-verify="content" id="LAY_demo_editor"></textarea>
                    </div>
                </div-->

                <!--div class="layui-form-item">
                    <label class="layui-form-label">文章来源：</label>
                    <div class="layui-input-block">
                        <input type="text" name="laiyuan" required lay-verify="required" placeholder="请输入文章来源" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">文章排序：</label>
                    <div class="layui-input-block">
                        <input type="text" name="listorder" required lay-verify="required" placeholder="请输入排序" autocomplete="off" class="layui-input" value="100">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">点击数：</label>
                    <div class="layui-input-block">
                        <input type="text" name="count" required lay-verify="required" placeholder="请输入文章点击数" autocomplete="off" class="layui-input" value="100">
                    </div>
                </div>
            </div>
            <div class="layui-tab-item">
                <div class="layui-form-item">
                    <label class="layui-form-label">关键字：</label>
                    <div class="layui-input-block">
                        <input type="text" name="laiyuan" placeholder="请输入关键字" autocomplete="off" class="layui-input">
                    </div>
                </div-->
                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">联系人<br/>描述：</label>
                    <div class="layui-input-block">
                        <textarea placeholder="请输入内容" class="layui-textarea"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="layui-form-item" style="padding-left: 10px;">
        <div class="layui-input-block">
            <button class="layui-btn layui-btn-normal" type="submit" data-url="article-list.html">立即添加</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>
<script src="../../static/admin/layui/layui.js" type="text/javascript" charset="utf-8"></script>
<script src="../../static/admin/js/common.js" type="text/javascript" charset="utf-8"></script>
<script>
    layui.use(['form', 'jquery', 'laydate', 'layer', 'laypage', 'dialog', 'common', 'tool', 'element', 'upload', 'layedit'], function() {
        var form = layui.form(),
            layer = layui.layer,
            $ = layui.jquery,
            laypage = layui.laypage,
            laydate = layui.laydate,
            layedit = layui.layedit,
            common = layui.common,
            tool = layui.tool,
            element = layui.element(),
            dialog = layui.dialog;

        //获取当前iframe的name值
        var iframeObj = $(window.frameElement).attr('name');
        //创建一个编辑器
        var editIndex = layedit.build('LAY_demo_editor', {
            tool: ['strong' //加粗
                , 'italic' //斜体
                , 'underline' //下划线
                , 'del' //删除线
                , '|' //分割线
                , 'left' //左对齐
                , 'center' //居中对齐
                , 'right' //右对齐
                , 'link' //超链接
                , 'unlink' //清除链接
                , 'image' //插入图片
            ],
            height: 100
        })
        //全选
        form.on('checkbox(allChoose)', function(data) {
            var child = $(data.elem).parents('table').find('tbody input[type="checkbox"]');
            child.each(function(index, item) {
                item.checked = data.elem.checked;
            });
            form.render('checkbox');
        });
        form.render();

        layui.upload({
            url: '上传接口url',
            success: function(res) {
                console.log(res); //上传成功返回值，必须为json格式
            }
        });
    });
</script>
</body>
</html>