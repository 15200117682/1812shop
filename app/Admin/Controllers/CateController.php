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

    //分类管理试图页
    public function index(Content $content)
    {
        return $content
            ->title("分类管理")
            ->description($this->description['index'] ?? trans('admin.list'))
            ->body($this->grid());
    }

    //分类管理添加页
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

        $grid->column('cate_id', __('Cate id'));
        $grid->column('cate_name', __('Cate name'));
        $grid->column('p_id', __('P id'));
        $grid->column('order', __('Order'));
        $grid->column('status', __('Status'));
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
        $show = new Show(CateModel::findOrFail($id));

        $show->field('cate_id', __('Cate id'));
        $show->field('cate_name', __('Cate name'));
        $show->field('p_id', __('P id'));
        $show->field('order', __('Order'));
        $show->field('status', __('Status'));
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
        $form = new Form(new CateModel);

        $form->text('cate_name', __('Cate name'));
        $form->select('p_id', __('P id'))->options(CateModel::selectOptions());
        $form->number('order', __('Order'));
        $form->number('status', __('Status'));

        return $form;
    }
}
