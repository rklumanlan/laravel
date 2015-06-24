<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Language extends Model {
    protected $guarded = [];
    protected $table = 'languages';

    public function user() {
        return $this->belongsToMany('App\User','user_lang','lang_id','user_id');
    }
}
