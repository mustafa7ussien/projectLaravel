<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Service extends Model
{
    protected $table="service";
    use Translatable;
    protected $translatable = ['title', 'description'];
}
