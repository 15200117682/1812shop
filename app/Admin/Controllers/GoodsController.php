<?php

namespace App\Admin\Controllers;

use App\Model\BrandModel;
use App\Model\CateModel;
use App\Model\GoodsModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;

class GoodsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Model\GoodsModel';

    //商品管理页面页
    public function index(Content $content)
    {
        return $content
            ->title("商品管理")
            ->description($this->description['index'] ?? trans('admin.list'))
            ->body($this->grid());
    }

    //商品管理添加页
    public function create(Content $content)
    {
        return $content
            ->title("商品添加")
            ->description($this->description['create'] ?? trans('admin.create'))
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new GoodsModel);

        $grid->column('g_id', __('商品id'));
        $grid->column('g_name', __('商品名称'));
        $grid->column('g_img', __('商品图片'))->image("http://www.1812shop.com/uploads/",100,100);

        $grid->column('g_describe', __('商品描述'));
        $grid->column('g_price', __('商品定价'));
        $grid->column('g_prices', __('商品售价'));
        $grid->column('status', __('状态'))->display(function ($status){
            if($status=1){
                return "√";
            }elseif($status==0){
                return "×";
            }
        });
        $grid->column('g_number', __('商品库存'));
        $grid->column('cate_id', __('所属分类'));
        $grid->column('b_id', __('所属品牌'));
        $grid->column('updated_at', __('修改时间'));
        $grid->column('u_time', __('添加时间'))->display(function ($time){
            return date("Y-m-d H:i:s",$time);
        });


        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(GoodsModel::findOrFail($id));

        $show->field('g_id', __('商品id'));
        $show->field('g_name', __('商品名称'));
        $show->field('g_img', __('商品图片'));
        $show->field('g_describe', __('商品描述'));
        $show->field('g_price', __('商品定价'));
        $show->field('g_prices', __('商品售价'));
        $show->field('status', __('状态'));
        $show->field('cate_id', __('所属分类'));
        $show->field('b_id', __('所属品牌'));
        $show->field('status', __('状态'));
        $show->field('updated_at', __('修改时间'));
        $show->field('g_number', __('G number'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new GoodsModel);

        $path="/goods";

        $form->text('g_name', __('商品名称'));
        $form->image('g_img', __('商品图片'))->uniqueName()->move($path);
        $form->text('g_describe', __('商品描述'));
        $form->decimal('g_price', __('商品定价'));
        $form->decimal('g_prices', __('商品售价'));
        $form->number('status', __('状态'));
        $form->select('cate_id', __('所属分类'))->options(CateModel::selectOptions());
        $form->select('b_id', __('所属品牌'))->options($this->Get());

        $form->number('g_number', __('库存'));
        $form->hidden('u_time', __('U time'))->value(time());

        return $form;
    }

    public function Get(){
        $b_name=BrandModel::pluck("b_name");
        $b_id=BrandModel::pluck("b_id");
        $data=[];
        foreach ($b_name as $key=>$value) {
            foreach ($b_id as $k=>$v) {
                $data[$v]=$value;
                $name=BrandModel::where(["b_id"=>$v])->pluck("b_name");
                $data[$v]=$name['0'];
            }
        }
        return $data;
    }

}
