<?php

namespace App\Http\Controllers\Order;

use App\Model\CateModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\OrderModel;
use App\Model\AreaModel;
class OrderController extends Controller
{
    //订单展示
    public function order_show()
    {
        return view("order.order");
    }
    public function order_address()
    {
        $addmodel = AreaModel::where(['pid'=>0])->get()->toArray();
        return view("order.order_address",['data'=>$addmodel]);
    }
    /** 三级联动获取区域 */
    public function getArea(Request $request){
        $id = $request->input("id");
        if(empty($id)){
            $info=AreaModel::where(['pid'=>0])->get()->toArray();
        }else{
            $where=[
                'pid'=>$id
            ];
            $info=AreaModel::where($where)->get()->toArray();
        }
        $arr=[
            "code"=>200,
            "msg"=>"ok",
            "data"=>$info
        ];
        return $arr;
    }
    /** 获取区域信息 */
    public function getAreaInfo($id){
        $where=[
            'pid'=>$id
        ];
        $info=AreaModel::where($where)->get()->toArray();
        return $info;
    }



    public function create()
    {
        //计算订单金额
        $goods = CateModel::where(['user_id'=>Auth::id(),'session_id'=>Session::getId()])->get()->toArray();
//        echo '<pre>';print_r($goods);echo '</pre>';die;
        $order_amount = 0;
        foreach($goods as $k=>$v){
            $order_amount += $v['goods_selfprice'];       //计算订单金额
        }
        $order_info = [
            'user_id'               => Auth::id(),
            'order_number'          => OrderModel::generateOrderSN(Auth::id()),     //订单编号
            'order_amount'      => $order_amount,
            'create_time'          => time()
        ];
        $order_id = OrderModel::insertGetId($order_info);        //写入订单表
//        print_r($order_id);die;
        //订单详情
        foreach($goods as $k=>$v){
            $detail = [
                'order_id'      => $order_id,
                'goods_id'      => $v['goods_id'],
                'goods_name'    => $v['goods_name'],
                'goods_selfprice'   => $v['goods_selfprice'],
                'user_id'           => Auth::id()
            ];
            //写入订单详情表
            OrderDetailModel::insertGetId($detail);
        }
        header('Refresh:3;url=/lists');
        echo "生成订单成功";
    }
}
