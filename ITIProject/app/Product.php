<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Product extends Model
{
    protected $table="product";
    use Translatable;
    protected $translatable = ['title','description','skills'];
}
