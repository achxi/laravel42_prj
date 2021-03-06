<?php
use Illuminate\Auth\UserInterface;
class Thanhvien extends \Eloquent implements UserInterface {
	protected $fillable = ['user', 'pass', 'email', 'hoten', 'diachi', 'dienthoai', 'hieuluc', 'capquyen'];

	protected $table = 'thanhvien';
	protected $primaryKey = 'user';

	public $timestamps = false;
	public $incrementing = false;

	public static $auth_rules = [
		'username' => 'required',
		'password' => 'required|min:5'
	];		
	public static $auth_rules_reg = [
		'loginname' => 'required|unique:thanhvien,user',
		'password' => 'required|min:5|confirmed',
		'password_confirmation' => 'required|min:5',
		'email' => 'required|email|unique:thanhvien,email'
	];
	public static $auth_rules_update = [
		'password' => 'required|min:5',
		'email' => 'required|email|unique:thanhvien,email,'
	];	
	public function post_account($user = ''){
		return array(
			'email' => 'required|email|unique:thanhvien,email'.($user ? ",".$user : '' ).',user',
			'password'           => 'required|min:5',
			'phone'              => 'numeric'
		);
	}
	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		 return $this->getKey();
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