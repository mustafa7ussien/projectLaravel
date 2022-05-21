<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Translatestaticdat extends Model
{
    protected $table="translatestaticdat";
    use Translatable;
    protected $translatable = ['logo', 'home','services','team','review','product','hdesc','hbtn','serv','sdesc','rev','rdesc','rnext','rprev','tem','tdesc','prod','pdesc','footer','snghead','sngdesc'];
    
}
