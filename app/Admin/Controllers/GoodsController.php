<?php

namespace App\Admin\Controllers;

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

    //商品管理试图页
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

        $grid->column('g_id', __('G id'));
        $grid->column('g_name', __('G name'));
        $grid->column('g_img', __('G img'));
        $grid->column('g_describe', __('G describe'));
        $grid->column('g_price', __('G price'));
        $grid->column('g_prices', __('G prices'));
        $grid->column('status', __('Status'));
        $grid->column('c_id', __('C id'));
        $grid->column('b_id', __('B id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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

        $show->field('g_id', __('G id'));
        $show->field('g_name', __('G name'));
        $show->field('g_img', __('G img'));
        $show->field('g_describe', __('G describe'));
        $show->field('g_price', __('G price'));
        $show->field('g_prices', __('G prices'));
        $show->field('status', __('Status'));
        $show->field('c_id', __('C id'));
        $show->field('b_id', __('B id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

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

        $form->text('g_name', __('商品名称'));
        $form->text('g_img', __('商品图片'));
        $form->text('g_describe', __('商品描述'));
        $form->decimal('g_price', __('商品定价'));
        $form->decimal('g_prices', __('商品售价'));
        $form->number('status', __('状态'));
        $form->number('c_id', __('所属分类'));
        $form->number('b_id', __('所属品牌'));

        return $form;
    }
}
