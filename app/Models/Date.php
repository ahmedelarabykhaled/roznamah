<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    public function day()
    {
    	return $this->hasOne('App\Models\Day','id','day_id');
    }
    public function aldor()
    {
    	return $this->hasOne('App\Models\AlDor','id','al_dors_id');
    }
    public function star()
    {
    	return $this->hasOne('App\Models\Star','id','stars_id');
    }
    public function alfajr()
    {
    	return $this->hasOne('App\Models\AlFajr','id','al_fajrs_id');
    }
    public function altala()
    {
    	return $this->hasOne('App\Models\AlTala','id','al_talas_id');
    }
    protected $fillable = ['date','season'];
}
