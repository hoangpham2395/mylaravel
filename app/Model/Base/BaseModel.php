<?php

namespace App\Model\Base;

use App\Model\Presenters\Base\BasePresenter;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use BasePresenter;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    public $timestamps = true;
}
