<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Framework extends Model {
    protected $guarded = [];
    protected $table = 'framework';

    public function user() {
        return $this->belongsToMany('App\User','user_fwork','fwork_id','user_id');
    }
}
