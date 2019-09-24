<?php

namespace App\Http\Controllers\index;
use App\Model\GoodsModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
    	$statusWhere=[
    		"status"=>1
    	];
    	$codeWhere=[
    		"status"=>0
    	];
    	$goodsFound=GoodsModel::where($statusWhere)->get()->toArray();
    	// dd($goodsFound);
    	$topGoods =GoodsModel::where($codeWhere)->get()->toArray();
    	return view('index/index',['goodsFound'=>$goodsFound,'topGoods'=>$topGoods]);
    }
}
