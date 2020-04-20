<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\Translatable;

class Job extends Model
{
    use Translatable;
    protected $translatable = ['f_name','l_name','qualification','address'];
}