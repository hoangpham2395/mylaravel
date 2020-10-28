<?php

namespace App\Model\Scopes\Base;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class BaseScope implements Scope
{
    // For boot soft delete if custom
    public function apply(Builder $builder, Model $model)
    {
        $builder->where(getConstant('DEL_FLAG.FIELD'), '=', getConstant('DEL_FLAG.ACTIVE'));
    }
}
