<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap 实例 - 边框表格</title>
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<div id="box">
<body>

<table class="table table-bordered">
    乘客姓名 <input type="text" id="s_name" value="<?php echo $s_name?>">
    身份证号 <input type="text" id="card" value="<?php echo $card?>"><br>
    班车车次 <input type="text" id="train" value="<?php echo $train?>">
    预约状态 <select id="t_statu">
        <option value="" >请选择...</option>
        <option value="1" >成功预约</option>
        <option value="0" >未预约</option>
    </select><br>
    <button onclick="search()">查询</button>
    <button href="show">重置</button>
    <thead>
    <tr>
        <th>ID</th>
        <th>班车车次</th>
        <th>姓名</th>
        <th>身份证号</th>
        <th>性别</th>
        <th>单位</th>
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
            <td>{{$v->id}}</td>
            <td>{{$v->train}}</td>
            <td>{{$v->s_name}}</td>
            <td>{{$v->card}}</td>
            <td>{{$v->sex}}</td>
            <td>{{$v->unit}}</td>
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
            <td><a href="javascript:void(0)" class="dd" zhi="{{$v->id}}" ye="{{$page}}">删除</a>||<a href="ck?id={{$v->id}}">查看</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
<a href="javascript:void(0)" onclick="page(1)">首页</a>
<a href="javascript:void(0)" onclick="page(<?php echo $perv?>)">上一页</a>
<a href="javascript:void(0)" onclick="page(<?php echo $next?>)">下一页</a>
<a href="javascript:void(0)" onclick="page(<?php echo $last?>)">尾页</a>
<b>当前是第{{$page}}页，共{{$last}}页</b>
</body>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
    function page(page) {
        var s_name = $("#s_name").val();
        var card = $("#card").val();
        var train = $("#train").val();
        var t_statu = $("#t_statu").val();
        $.ajax({
            url:'show',
            type:'get',
            data:{
                s_name:s_name,
                card:card,
                train:train,
                t_statu:t_statu,
                page:page
            },
            success:function (img) {
                $("#box").html(img);
            }
        })
    }
    $(".dd").click(function () {
        var id = $(this).attr("zhi");
        var ye = $(this).attr("ye");
        $.ajax({
            url:'del',
            type:'get',
            data: {
                page:ye,
                id:id
            },
            success:function (img) {
                $('#box').html(img);
            }
        })
    })
    function search() {
        var s_name = $("#s_name").val();
        var card = $("#card").val();
        var train = $("#train").val();
        var t_statu = $("#t_statu").val();
        // alert(t_statu);
        $.ajax({
            url:'show',
            type:'get',
            data:{
                s_name:s_name,
                card:card,
                train:train,
                t_statu:t_statu
            },
            success:function (img) {
                $('#box').html(img);
            }
        })
    }
</script>
</html>