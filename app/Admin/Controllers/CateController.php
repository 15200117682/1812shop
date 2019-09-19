<?php

namespace App\Admin\Controllers;

use App\Model\CateModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;

class CateController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Model\CateModel';

    //商品分类管理页面页
    public function index(Content $content)
    {
        return $content
            ->title("商品分类管理")
            ->description($this->description['index'] ?? trans('admin.list'))
            ->body($this->grid());
    }

    //商品分类管理添加页
    public function create(Content $content)
    {
        return $content
            ->title("分类添加")
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
        $grid = new Grid(new CateModel);

        $grid->column('cate_id', __('分类id'));
        $grid->column('cate_name', __('分类名'));
        $grid->column('p_id', __('所属父类'));
        $grid->column('order', __('排序'));
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
        $show = new Show(CateModel::findOrFail($id));

        $show->field('cate_id', __('分类id'));
        $show->field('cate_name', __('分类名称'));
        $show->field('p_id', __('所属父类'));
        $show->field('order', __('排序'));
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
        $form = new Form(new CateModel);

        $form->text('cate_name', __('分类名称'));
        $form->select('p_id', __('所属父类'))->options(CateModel::selectOptions());
        $form->number('order', __('排序'));
        $form->number('status', __('状态'));
        $form->hidden('u_time', __('U time'))->value(time());

        return $form;
    }
}
