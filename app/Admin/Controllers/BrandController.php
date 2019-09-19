<?php

namespace App\Admin\Controllers;

use App\Model\BrandModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;

class BrandController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Model\BrandModel';

    //品牌管理页面页
    public function index(Content $content)
    {
        return $content
            ->title("商品品牌管理")
            ->description($this->description['index'] ?? trans('admin.list'))
            ->body($this->grid());
    }

    //品牌管理添加页
    public function create(Content $content)
    {
        return $content
            ->title("品牌添加")
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
        $grid = new Grid(new BrandModel);

        $grid->column('b_id', __('品牌id'));
        $grid->column('b_name', __('品牌名称'));
        $grid->column('b_logo', __('品牌logo'))->image("http://www.1812shop.com/uploads/",100,100);

        $grid->column('b_describe', __('品牌描述'));
        $grid->column('status', __('状态'))->display(function ($status){
            if($status=1){
                return "√";
            }elseif($status==0){
                return "×";
            }
        });
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
        $show = new Show(BrandModel::findOrFail($id));

        $show->field('b_id', __('品牌id'));
        $show->field('b_name', __('品牌名称'));
        $show->field('b_logo', __('品牌logo'));
        $show->field('b_describe', __('品牌描述'));
        $show->field('status', __('状态'));
        $show->field('updated_at', __('修改时间'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new BrandModel);

        $path="/brand";

        $form->text('b_name', __('品牌名称'));
        $form->image('b_logo', __('品牌logo'))->uniqueName()->move($path);
        $form->text('b_describe', __('品牌描述'));
        $form->number('status', __('状态'));
        $form->hidden('u_time', __('U time'))->value(time());

        return $form;
    }
}
