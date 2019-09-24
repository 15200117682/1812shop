<?php

namespace App\Http\Controllers\Order;

use App\Model\AddressModel;
use App\Model\CateModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\OrderModel;
use App\Model\AreaModel;

class OrderController extends Controller
{

    //构造方法
    public function __construct()
    {
        $this->status=[
            "200"=>"ok",
            "40000"=>"未知原因",
            "40001"=>"未知原因，错误无法解释",
        ];
    }

    /**
     * @param null $code
     * @param null $msg
     * @param null $data
     * @return false|string
     */
    public function fail($code = null, $msg = null, $data = null)
    {
        $response = [
            "code" => $code,
            "msg" => $msg,
            "data" => $data
        ];
        return json_encode($response, JSON_UNESCAPED_UNICODE);
    }

    //订单展示
    public function order_show()
    {
        return view("order.order");
    }

    //订单页面
    public function order_address()
    {
        $addmodel = AreaModel::where(['pid'=>0])->get()->toArray();
        $data=AddressModel::get()->toArray();
        return view("order.order_address",['data'=>$addmodel,"address"=>$data]);
    }
    /** 三级联动获取区域 */
    public function getArea(Request $request){
        $id = $request->input("id");
        $where=[
            'pid'=>$id
        ];
        $info=AreaModel::where($where)->get();
        $arr=[
            "code"=>200,
            "msg"=>"ok",
            "data"=>$info
        ];
        return $arr;
    }

    //执行收货地址添加入库
    public function address(Request $request)
    {
        $info=$request->input();//接受所有数据
        if(empty($info["name"]) || empty($info["tel"]) || empty($info["details"]) || $info["province"]=="0" || $info["city"]=="0" || $info["district"]=="0"){

            return $this->fail("40001",$this->status["40001"]);     //缺少参数，返回错误

        }
        if($info["default"]==1){
            AddressModel::where(["u_id"=>1])->update(["default"=>0]);
        }
        $arr=[
            "u_id"=>1,          //--------------###############用户id，未对接
            "tel"=>$info["tel"],
            "province"=>$info["province"],
            "city"=>$info["city"],
            "county"=>$info["district"],
            "detail"=>$info["details"],
            "default"=>$info["default"],
            "status"=>1,
            "u_time"=>time(),
            "man"=>$info["name"],
        ];      //拼装数据
        $res=AddressModel::insertGetId($arr);
        if($res){

            return $this->fail("200",$this->status["200"],$data=$res);  //ok，返回参数

        }else{

            return $this->fail("40000",$this->status["40000"],$data=$res);  //未知错误，无法入库

        }
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
