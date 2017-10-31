<?php

namespace wiz\cms\Models;

use Illuminate\Database\Eloquent\Model;

class AdminRole extends Model
{
    public function adminuser()
    {
        return $this->hasOne('wiz\cms\Models\AdminUser');
    }
}
