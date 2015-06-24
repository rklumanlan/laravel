<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class OS extends Model {
    protected $guarded = [];
    protected $table = 'operating_system';

    public function user() {
        return $this->belongsToMany('App\User','user_os','os_id','user_id');
    }
}
