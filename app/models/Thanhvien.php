<?php
use Illuminate\Auth\UserInterface;
class Thanhvien extends \Eloquent implements UserInterface {
	protected $fillable = ['user', 'pass'];

	protected $table = 'thanhvien';
	protected $primaryKey = 'user';

	public $timestamps = false;
	public $incrementing = false;

	public static $auth_rules = [
		'username' => 'required',
		'password' => 'required|min:5'
	];		

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->user;
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->pass;
	}

	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken()
	{

	}

	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setRememberToken($value)
	{

	}

	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName()
	{

	}
}