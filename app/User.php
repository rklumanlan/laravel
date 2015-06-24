<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['remember_token'];


	public function pinfo()
	{
		return $this->hasOne('App\Pinfo','user_id');
	}

	public function educ()
	{
	    return $this->hasMany('App\Educ','user_id');
	}

	public function comp()
	{
	    return $this->hasMany('App\Comp','user_id');
	}

	public function ref()
	{
    	return $this->hasMany('App\Ref','user_id');
	}

	public function lang()
    {
        return $this->belongsToMany('App\Language','user_lang','user_id','lang_id');
    }

	public function os()
    {
        return $this->belongsToMany('App\Os','user_os','user_id','os_id');
    }

	public function fwork()
    {
        return $this->belongsToMany('App\Framework','user_fwork','user_id','fwork_id');
    }

	public function a()
	{
	    // There two calls return collections
	    // as defined in relations.
	    $b = $this->pinfo;
	    $c = $this->lang;

	    // Merge collections and return single collection.
	    return $b->merge($c);
	}

}
