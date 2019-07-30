<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\student;

class weekController extends Controller{
    function index(){
        return view('week.index');
    }
    function add(Request $request){
        //获取要添加的数据
        $s_name = $request->s_name;
        $train = $request->train;
        $card = $request->card;
        $sex = $request->sex;
        $unit = $request->unit;
        $type = $request->type;
        $t_name = $request->t_name;
        $t_unit = $request->t_unit;
        $t_liu = $request->t_liu;
        $t_statu = $request->t_statu;
        //进行添加
        $a = DB::table('student')->insert([
            's_name'=>$s_name,
            'train'=>$train,
            'card'=>$card,
            'sex'=>$sex,
            'unit'=>$unit,
            'type'=>$type,
            't_name'=>$t_name,
            't_unit'=>$t_unit,
            't_liu'=>$t_liu,
            't_statu'=>$t_statu,
        ]);
        return redirect('week/show');
    }
    function show(Request $request){
        $page = $request->page;//页码
        $s_name = $request->s_name;//乘客姓名
        $card = $request->card;//身份证号码
        $train = $request->train;//乘车班次
        $t_statu = $request->t_statu;//预约状态
        $where = "1";
        if (empty($page)){
            $page = "1";
        }
        if (!empty($s_name)){
            $where.=" and s_name like '%$s_name%'";
        }if (!empty($card)){
            $where.=" and card = '$card'";
        }if (!empty($train)){
            $where.=" and train = '$train'";
        }if (!empty($t_statu)){
            $where.=" and t_statu = '$t_statu'";
        }if ($where == "1"){
            $count = student::count();//总条数
        }else{
            $count = count(DB::select("select * from student where $where"));
        }
        $pagesize = '2';//每页显示条数
        $last = ceil($count/$pagesize);//总页数
        $perv = ($page -1 )>0?$page-1:1;//下一页
        $next = ($page +1 )<$last?$page+1:$last;//上一页
        $limit = ($page - 1 )*$pagesize;//偏移量
        if ($where == "1"){
            $data = DB::select("select * from student limit $limit,$pagesize");//查询
        }else{
            $data = DB::select("select * from student where $where limit $limit,$pagesize");//查询
        }

        return view('week.show',[
            'data'=>$data,
            'last'=>$last,
            'perv'=>$perv,
            'next'=>$next,
            'page'=>$page,
            's_name'=>$s_name,
            'card'=>$card,
            't_statu'=>$t_statu,
            'train'=>$train
        ]);
    }
    function del(Request $request){
        $id = $request->id;//获取删除表示
        $page = $request->page;//获取页码
        $a = DB::table('student')->where('id','=',$id)->delete();//执行命令
        return redirect("week/show?page=$page");//删除
    }
    function ck(Request $request){
        $id = $request->id;
        $data = DB::table('student')->where('id','=',$id)->get();
        return view('week.xq',['data'=>$data]);
    }
}