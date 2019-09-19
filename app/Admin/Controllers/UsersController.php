<?php

namespace App\Admin\Controllers;

use App\Model\UsersModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;

class UsersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Model\UsersModel';

    //用户管理页面页
    public function index(Content $content)
    {
        return $content
            ->title("用户管理")
            ->description($this->description['index'] ?? trans('admin.list'))
            ->body($this->grid());
    }

    //用户管理添加页
    public function create(Content $content)
    {
        return $content
            ->title("用户添加")
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
        $grid = new Grid(new UsersModel);

        $grid->column('u_id', __('用户id'));
        $grid->column('u_name', __('用户名'));
        $grid->column('u_email', __('邮箱'));
        $grid->column('status', __('状态'))->display(function ($status){
            if($status=1){
                return "√";
            }elseif($status=0){
                return "×";
            }
        });
        $grid->column('u_time', __('u_time'))->display(function ($time){
            return date("Y-m-d H:i:s",$time );
        });
        $grid->column('updated_at', __('修改时间'));

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
        $show = new Show(UsersModel::findOrFail($id));

        $show->field('u_id', __('用户id'));
        $show->field('u_name', __('用户名'));
        $show->field('u_email', __('邮箱'));
        $show->field('u_pwd', __('密码'));
        $show->field('status', __('状态'));
        $show->field('updated_at', __('时间'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new UsersModel);

        $form->text('u_name', __('U name'));
        $form->text('u_email', __('U email'));
        $form->text('u_pwd', __('U pwd'));
        $form->number('status', __('状态'));
        $form->hidden('u_time', __('U time'))->value(time());

        return $form;
    }
}
