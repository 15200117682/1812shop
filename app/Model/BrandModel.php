<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\ModelTree;


class BrandModel extends Model
{
    use ModelTree;
    protected $table="brand";
    public $primaryKey="b_id";

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setParentColumn('status');
        $this->setOrderColumn('u_time');
        $this->setTitleColumn('b_name');
    }
}
