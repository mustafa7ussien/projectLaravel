<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Review extends Model
{
    protected $table="review";
    use Translatable;
    protected $translatable = ['title', 'name','content'];
}
