<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap 实例 - 条纹表格</title>
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>

<table class="table table-striped">
    <h3>预约详情</h3>
    <thead>
    <tr>
        <th>班车车次</th>
        <th>姓名</th>
        <th>性别</th>
        <th>乘客类型</th>
        <th>代理人姓名</th>
        <th>代理人单位</th>
        <th>流程状态</th>
        <th>预约状态</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $v)
        <tr>
            <td>{{$v->train}}</td>
            <td>{{$v->s_name}}</td>
            <td>{{$v->sex}}</td>
            <td>{{$v->type}}</td>
            <td>{{$v->t_name}}</td>
            <td>{{$v->t_unit}}</td>
            <td>
                @if($v->t_liu == 1)
                    已确认
                @else
                    未确认
                @endif
            </td>
            <td>
                @if($v->t_statu == 1)
                    预约成功
                @else
                    未预约
                @endif
            </td>
            <td><a href="show">返回</a></td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>