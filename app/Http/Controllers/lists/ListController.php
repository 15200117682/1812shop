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
		// dd($select);
		return view('index/productlist',['select'=>$select]);
	}   
	//分类列表
	public function cateList(){
		$allselect=CateModel::get()->toArray();
		$rules=self::ruleLevel($allselect);
		// dd($rules);
		return view('index/cateList',['rules'=>$rules]);
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
	public function singledetail(){
		return view('index/singledetail');
	}                                                                                                  
}
