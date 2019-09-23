<?php

namespace App\Http\Controllers\Cart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\CartModel;

class CartController extends Controller
{
    public function cart_list(Request $request)
    {
    	//接受商品id
    	$g_id = $request->input('g_id');
    	//查询数据 需要两表联查 购物车表和商品表
    	$data =  CartModel::join('goods','goods.g_id','=','cart.g_id')
    	->where('goods.g_id','=',$g_id)
    	->get()
    	->toArray();
       	return view('cart/cart_list',['data'=>$data,'g_id'=>$g_id]);
    }
}
