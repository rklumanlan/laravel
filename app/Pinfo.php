<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Pinfo extends Model {

    protected $fillable = ['fname','mname','lname','address','city','sex','age','imgname'];

    protected $table = 'personal_info';

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
