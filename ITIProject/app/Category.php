<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Category extends Model
{
    protected $table="category";
    use Translatable;
    protected $translatable = ['title'];
}
