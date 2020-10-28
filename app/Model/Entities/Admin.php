<?php

namespace App\Model\Entities;

use App\Model\Base\BaseAuth;
use App\Model\Presenters\Base\BaseSoftDeletes;

class Admin extends BaseAuth
{
    use BaseSoftDeletes;

    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $fillable = ['email', 'role_type', 'name', 'avatar'];
    protected $hidden = ['password'];

    // Login not use remember_token
    public function save(array $options = array())
    {
        if (isset($this->remember_token)) {
            unset($this->remember_token);
        }
        return parent::save($options);
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
