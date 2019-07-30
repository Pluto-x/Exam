<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap 实例 - 水平表单</title>
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>
<form class="form-horizontal" role="form" action="add" method="POST">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">姓名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" name="s_name"
                   placeholder="请输入名字">
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">班车车次</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="lastname" name="train"
                   placeholder="请输入班车车次">
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">身份证号</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="lastname" name="card"
                   placeholder="请输入身份证号">
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">性别</label>
        <div class="col-sm-10">
            <input type="radio" name="sex" value="男"> 男
            <input type="radio" name="sex" value="女"> 女
    </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">单位</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="lastname" name="unit"
                   placeholder="请输入单位">
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">乘客类型</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="lastname" name="type"
                   placeholder="请输入乘客类型">
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">代理人姓名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="lastname" name="t_name"
                   placeholder="请输入代理人姓名">
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">代理人单位</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="lastname" name="t_unit"
                   placeholder="请输入代理人单位">
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">预约状态</label>
        <div class="col-sm-10">
            <input type="radio" name="t_liu" value="1"> 已确认
            <input type="radio" name="t_liu" value="0"> 未确认
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">预约状态</label>
        <div class="col-sm-10">
            <input type="radio" name="t_statu" value="1"> 已预约
            <input type="radio" name="t_statu" value="0"> 未预约
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">添加</button>
        </div>
    </div>
</form>
</body>
</html>