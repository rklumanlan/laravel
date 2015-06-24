<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Educ extends Model {
    protected $fillable = ['school','major','degree','desc','year1','year2'];

    protected $table = 'education';

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
