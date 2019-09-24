<?php

namespace App\Http\Controllers\lists;
use App\Model\GoodsModel;
use App\Model\CateModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
	//列表
	public function productlist(){
		$select=GoodsModel::get()->toArray();
		return view('index/productlist',['select'=>$select]);
	}   
	//分类列表
	public function cateList(Request $request){
		$allselect=CateModel::get()->toArray();
		$rules=self::ruleLevel($allselect);
		$cate_id=request()->input('cate_id');
		$cateIdWhere=[
			['cate_id','=',$cate_id]
		];
		$goodsSelect=GoodsModel::where($cateIdWhere)->get()->toArray();
		if(request()->ajax()){
			return json_encode(['code'=>1,'goodsSelect'=>$goodsSelect]);
		}
		return view('index/cateList',['rules'=>$rules,'goodsSelect'=>$goodsSelect]);
	}
	//分装递归方法
	public static function ruleLevel($allselect,$p_id=0,$level=1){
		static $info=[];
		foreach($allselect as $k=>$v){
			if($v['p_id'] == $p_id){
				$v['level'] = $level;
				$info[]=$v;
				self::ruleLevel($allselect,$v['cate_id'],$level+1);
			}
		}
		return $info;
	}
	//详情页
	public function singledetail(Request $request){
		$g_id=request()->input('g_id');
		dd($g_id);
		return view('index/singledetail');
	}                                                                                             
}