<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Comp extends Model {

    protected $fillable = ['compname','title','location','address','compdesc','mon1','mon2','cyear1','cyear2'];

    protected $table = 'company';

    public function comp()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
