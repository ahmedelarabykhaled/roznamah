<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public function category()
    {
    	return $this->hasOne('App\Models\Category','id','category_id');
    }
    protected $fillable = ['name','content','category_id'];
}
