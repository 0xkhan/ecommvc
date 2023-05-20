<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{

    use SoftDeletes;

    public $timestamps = true;
    protected $dateFormat = 'Y-m-d H:i:s.u';
    protected $fillable = ['name', 'slug'];
    protected $dates = ['deleted_at'];

}
