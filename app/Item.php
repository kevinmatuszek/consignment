<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'items';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['user_id', 'brand_id', 'category_id', 'name', 'description', 'price'];


	public function users()
	{
		return $this->belongsTo('User');
	}

	public function brands()
	{
		return $this->belongsTo('App\Brand');
	}

	public function categories()
	{
		return $this->belongsTo('App\Category');
	}


}
